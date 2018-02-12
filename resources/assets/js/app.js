
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Utils from './utils';

window.smoothScroll = require('smoothscroll');

/** maps **/

window.initGoogleMap = ()=>{

    Utils.forEach(document.querySelectorAll('.map-box'), (el)=>{

        let lat = null, lng = null;

        try{
            lat = parseFloat(el.getAttribute('data-lat'));
            lng = parseFloat(el.getAttribute('data-lng'));
        } catch(e){
            console.log('map init error', e);
        }

        if (lat && lng){

            let map = new google.maps.Map(el, {
                zoom: 14,
                center: {lat: lat, lng: lng }
            });

            let marker = new google.maps.Marker({
                position: {lat: lat, lng: lng },
                map: map
            });
        }
    });
};

Utils.onReady(()=>{


    let windowWidth = window.innerWidth || document.documentElement.clientWidth;

    let body = document.body;
    let prevScrollPosition = -9999;
    let bodyScrolled = false;

    function toggleMenu(){
        let rect = document.body.getBoundingClientRect();

        if (rect.top !== 0) {
            if (!bodyScrolled) {
                body.classList.add('scrolled');
                bodyScrolled = true;
            }
        } else {
            bodyScrolled = false;
            body.classList.remove('scrolled');
        }

        if (rect.top > prevScrollPosition ) {
            body.classList.add('has-fixed-menu');
        } else {
            body.classList.remove('has-fixed-menu');
        }

        prevScrollPosition = rect.top;
    }

    document.addEventListener('scroll', toggleMenu, false);

    Utils.forEach(document.querySelectorAll('a[href*="#"]'), (el)=>{

        el.addEventListener('click', (e)=>{
            e.preventDefault();
            e.stopPropagation();

            try {
                let attr = el.getAttribute('href');

                if (attr) {
                    attr = attr.substr(attr.indexOf('#')+1);

                    if (document.getElementById(attr)) {
                        smoothScroll(document.getElementById(attr));
                    } else {
                    }
                }

            } catch(e){
                alert(e);
            }

        }, false)
    });

    function makeSlider(element, options){
        let slider = false;

        if (document.querySelector(element + ' .swiper-container')){

            try {
                slider = new Swiper(element + ' .swiper-container', options);
            } catch(e){
                alert(e);
            }

            if ( slider ){

                let slideLeft = document.querySelector(element + ' .slide-left');
                let slideRight = document.querySelector(element + ' .slide-right');

                slideLeft.addEventListener('click', (e)=>{
                    e.preventDefault();
                    e.stopPropagation();
                    slider.swipePrev();
                }, false);
                slideRight.addEventListener('click', (e)=>{
                    e.preventDefault();
                    e.stopPropagation();
                    slider.swipeNext();
                }, false);
            }

            return slider;
        }

        return null;
    }

    function toggleModalBySelector(selector){
        if (selector) {

            let modal = document.querySelector(selector);

            if (modal) {
                modal.classList.toggle('is-active');

                if (modal.classList.contains('is-active')) {
                    let cnt = modal.querySelector('.modal-content');

                    if (cnt){
                        let cntRect = cnt.getBoundingClientRect();

                        let top =
                                (window.pageYOffset || document.documentElement.scrollTop)
                                + (
                                    (window.innerHeight || document.documentElement.clientHeight)
                                    - cntRect.height
                                ) / 2
                            ;

                        cnt.style.top = Math.max(top, 0) + "px";
                    }
                }
            }
        }
    }

    function toggleModal(el){
        let modalClass = el.getAttribute('data-modal-target');

        toggleModalBySelector(modalClass);
    }

    Utils.forEach(document.querySelectorAll('.js-modal-toggle'), (el)=>{

        el.addEventListener('click', (e)=>{
            e.preventDefault();
            e.stopPropagation();

            toggleModal(el);

        }, false);
    });

    /***************** auto form ********************/

    Utils.forEach(document.querySelectorAll('.js-send-form'), (el)=>{
        el.addEventListener('click', (e)=>{
            e.preventDefault();
            e.stopPropagation();

            let formCode = el.getAttribute('data-form-code');
            let form = document.querySelector(`.form[data-form-code="${formCode}"]`);

            let hasError = false;
            let postData = {};

            let controls = form.querySelectorAll('.control');

            Utils.forEach( controls, (control)=>{

                if (control.getAttribute('data-required') == 1
                    && !control.value
                    && !control.value.trim().length) {

                    control.classList.add('has-error');
                    hasError = true;
                } else {
                    control.classList.remove('has-error');
                }

                postData[ control.getAttribute('name') ] = control.value.trim();
            });

            if (!hasError){

                form.classList.add('is-posting');

                // console.log(postData);

                axios.post(form.getAttribute('data-url'), postData)
                    .then(()=>{
                        form.classList.remove('is-posting');

                        Utils.forEach( controls, (control)=>{
                            control.value = '';
                        });

                        toggleModalBySelector(`.modal.form-${formCode}`);

                        alert('Заявка отправлена.')
                    })
                    .catch(()=>{
                        form.classList.remove('is-posting');
                    });
            } else {
                alert('Необходимо заполнить все поля.')
            }
        });
    });

    Utils.forEach(document.querySelectorAll('.tabs'), (tabs)=>{

        Utils.forEach( tabs.querySelectorAll('.tab-header .tab'), (tab)=>{

            let attr = tab.getAttribute('data-tab-id');

            tab.addEventListener('click',(e)=>{
                e.preventDefault();
                e.stopPropagation();

                Utils.forEach( tabs.querySelectorAll('.tabs .is-active'), (el)=>{el.classList.remove('is-active')});
                Utils.forEach( tabs.querySelectorAll('.tabs [data-tab-id="'+attr+'"]'), (el)=>{el.classList.add('is-active')});
            }, false)
        });
    });


    document.querySelector('.hamburger').addEventListener('click', ()=>{
        body.classList.toggle('has-menu-opened');
    }, false);




    makeSlider('.portfolio', {
        slidesPerView: windowWidth <= 992 ? 2 : 6,
        mode:'horizontal',
        autoplay: 4000,
        loop: true,
        preventLinks: false
    });

    makeSlider('.clients', {
        slidesPerView: windowWidth <= 992 ? 2 : 3,
        mode:'horizontal',
        autoplay: 4000,
        loop: true,
        preventLinks: false
    });

    makeSlider('.feedbacks',{
        slidesPerView: windowWidth <= 992 ? 1 : 2,
        mode:'horizontal',
        autoplay: 4000,
        loop: true,
        preventLinks: false
    });

    makeSlider('.partners',{
        slidesPerView: windowWidth <= 992 ? 1 : 2,
        mode:'horizontal',
        autoplay: 4000,
        loop: true,
        preventLinks: false
    });

    Utils.forEach(document.querySelectorAll('.js-open-video'), (el)=>{

        el.addEventListener('click', (e)=>{
            console.log('click');
            e.preventDefault();
            e.stopPropagation();

            let src = el.getAttribute('data-src');

            let ifr = document.querySelector('.js-modal-video iframe');

            ifr.src = src;

            toggleModalBySelector('.js-modal-video');
        }, false);
    });

    document.querySelector('.preloader').style.display = 'none';
});



