export default {
    onReady(cb){
        if (document.readyState != 'loading'){
            cb();
        } else if (document.addEventListener) {
            document.addEventListener('DOMContentLoaded', cb);
        } else {
            document.attachEvent('onreadystatechange', function() {
                if (document.readyState != 'loading')
                    cb();
            });
        }
    },

    forEach(arr, cb) {
        for (let i = 0; i < arr.length; i++)
            cb(arr[i], i);
    },
}