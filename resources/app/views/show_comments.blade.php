@extends('layout.layout')

@section('title')
<title>Show Comments</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='comment']").addClass('active');
        
        window.location.hash = '#content';
    });
</script>
@stop

@section('content')

<div id='content' class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="headline-lg">
                Show Comments
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <div class="text-center col-sm-offset-2 col-sm-8">
                <h5 class="red">
                    Published Contents:
                </h5>
                {{ Form::open(array('url' => 'home/show-comment', 'method' => 'get')) }}
                <select name="c" class="form-control">
                    @foreach ($contents as $content)
                    <option value="{{ $content->id }}">{{ $content->title }}</option>
                    @endforeach
                </select>
                {{ Form::submit('Show Comments', array('class' => 'btn btn-primary margin-top-sm')) }}
                {{ Form::close() }}


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
                <nav>
                    {{ $comments->appends(Request::only('c'))->links(); }}
                </nav>
                @endif
            </div>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop