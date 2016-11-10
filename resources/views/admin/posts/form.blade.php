
<div class="row">
    <div class="col-md-12 form-group">
        {{ Form::label('title', 'Title Post') }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>
    <div class="col-md-12 form-group">
        {{ Form::label('body', 'Your message:') }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    </div>
    <div class="col-md-12">
        {{--{{ Form::submit('Save') }}--}}
        {{--$text_btn dit omdat we dit form zowel op de edit als create page gebruiken--}}
        {{--tekst op de btn wordt dan afhankelijk aangepast--}}
        {{ Form::submit($textBtn, ['class' => 'btn btn-success']) }}
    </div>
</div>