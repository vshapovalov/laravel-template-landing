@if($form->isModal)

<div class="modal form-{{ $form->code }}">
    <div class="modal-overlay js-modal-toggle" data-modal-target=".modal.form-{{ $form->code }}"></div>
    <div class="modal-content">
        <span class="close-button js-modal-toggle" data-modal-target=".modal.form-{{ $form->code }}"><i class="icon-cancel"></i></span>
@endif
        <div class="form" data-form-code="{{ $form->code }}" data-url="{{ url($form->url) }}">
            <div class="form-header">
                <p class="title">{{ $form->title }}</p>
                <p class="description">{{ $form->description }}</p>
            </div>
            <div class="form-controls">
                @foreach($form->fields as $field)
                    <div class="control-group {{ $field->hidden ? 'hidden' : '' }}">
                        <input type="text" name="form_code" class="control" hidden value="{{ $form->code }}">
                        @if($field->label)
                            <p class="label">{{ $field->label }}</p>
                        @endif
                        @switch($field->type)
                            @case('phone')
                                <input type="text" data-required="{{ $field->required }}" class="control" type="text" name="{{ $field->name }}"
                                        placeholder="{{ $field->placeholder }}"
                                        value="{{ $field->value }}"
                                >
                                @break
                            @case('email')

                                <input type="email" data-required="{{ $field->required }}" class="control" type="text" name="{{ $field->name }}"
                                       placeholder="{{ $field->placeholder }}"
                                       value="{{ $field->value }}"
                                >
                                @break
                            @case('text')
                                <textarea class="control" name="{{ $field->name }}" cols="30" rows="10"
                                          placeholder="{{ $field->placeholder }}"
                                        data-required="{{ $field->required }}"
                                >{!! $field->value !!}</textarea>
                                @break
                            @default
                                <input type="text" data-required="{{ $field->required }}" class="control" type="text" name="{{ $field->name }}"
                                       placeholder="{{ $field->placeholder }}"
                                       value="{{ $field->value }}"
                                >
                        @endswitch
                    </div>
                @endforeach
            </div>
            <div class="form-footer">
                <div class="control-group">
                    <a href="javascript:;" class="button js-send-form" data-form-code="{{ $form->code }}">Отправить</a>
                    <a href="javascript:;"><i class="icon-spin animate-spin"></i></a>
                </div>
            </div>
        </div>
@if($form->isModal)
    </div>
</div>
@endif

