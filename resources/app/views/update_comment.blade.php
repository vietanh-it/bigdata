@extends('layout.layout')

@section('title')
<title>Update Comments</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='comment']").addClass('active');

        window.location.hash = "#content";
        if ($('input:radio[name="isEditContent"]').val() === 'no') {
            $('#category').show();
        } else {
            $('#category').hide();
        }

        $('input:radio[name="isEditContent"]').change(function () {
            if ($(this).is(':checked') && $(this).val() === 'yes') {
                $('#category').slideDown();
            } else {
                $('#category').slideUp();
            }
        });
    });
</script>
@stop

@section('content')
<div id="content" class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="headline-lg">
                Update Comments
            </h2>
        </div>
        <div class="col-sm-offset-2 col-sm-8 paragraph">
            {{ Form::open(['class' => 'form-horizontal', 'method' => 'put']) }}
            <div class="form-group">
                <div class="col-sm-3">
                    {{ Form::label('Edit category:') }}
                </div>
                <div class="col-sm-9">
                    <span>Yes</span>
                    {{ Form::radio('isEditContent', 'yes', false) }}
                    <span>No</span>
                    {{ Form::radio('isEditContent', 'no', true) }}
                </div>
            </div>
            <div class="form-group" id="category">
                <div class="col-sm-3">
                    {{ Form::label('Category:') }}
                </div>
                <div class="col-sm-9">
                    <select name="content" class="form-control">
                        @foreach($contents as $content)
                        <option value="{{ $content->id }}"
                                <?php if($content->id == $comment->content_id) { echo 'selected'; } ?>>
                            {{ $content->title }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    {{ Form::label('Comment:') }}
                </div>
                <div class="col-sm-9">
                    {{ Form::textarea('comment', $comment->comment, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop