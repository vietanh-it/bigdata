@extends('layout.layout')

@section('title')
<title>Post Comments</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='comment']").addClass('active');
        
        window.location.hash = "#content";
    });
</script>
@stop

@section('content')

<div id="content" class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="headline-lg">
                Post Comments
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <h4 class="headline">
                <span>Your Comments and Ideas will make the change happen towards this cause. Please come forward and show us your spirit.</span>
            </h4>
            <div class="text-center col-sm-offset-4 col-sm-4">
                @if(!empty($comments))
                <div class='comment-wrapper'>
                    @foreach($comments as $comment)
                    <div class="comment">
                        <div>
                            <label>Comments:</label>
                            <span>{{ $comment->comment }}</span>
                        </div>
                        <div>
                            <label>Category:</label>
                            <span>{{ $comment->content_title }}</span>
                        </div>
                        <div>
                            <label>Name:</label>
                            <span>{{ $comment->user_name }}</span>
                        </div>
                        <div>
                            <label>When posted:</label>
                            <span>{{ $comment->created_at }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="text-center col-sm-offset-3 col-sm-6">
                <h5 class="red">
                    Add Your Idea:
                </h5>
                {{ Form::open() }}
                <select name="content" class="form-control">
                    @foreach ($contents as $content)
                    <option value="{{ $content->id }}">{{ $content->title }}</option>
                    @endforeach
                </select>
                {{ Form::textarea('comment', null, array('class' => 'form-control margin-top-sm', 'placeholder' => 'Enter your comment (500 chars max)')) }}
                {{ Form::submit('Post Comments', array('class' => 'btn btn-primary margin-top-sm')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop