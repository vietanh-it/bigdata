@extends('layout.layout')

@section('title')
<title>Manage Comments</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='comment']").addClass('active');

        window.location.hash = "#content";
    });

    function deleteHandler(event) {
        if(!confirm('Are you sure?')){
            event.preventDefault();
        };
    }
</script>
@stop

@section('content')

<div id="content" class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="headline-lg">
                Manage Comments
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <table id="comment-table" class="table table-bordered table-hover">
                <thead>
                <th>Category</th>
                <th>Comment</th>
                <th>Date</th>
                <th colspan="2">Action</th>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->content_title }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>{{ $comment->created_at }}</td>
                        <td class="text-center">
                            <button class="btn btn-primary">Update</button>
                        </td>
                        <td class="text-center">
                            {{ Form::open() }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            <button type="submit" name="deleteId" value="{{ $comment->id }}" onclick="deleteHandler(event)" class="btn btn-warning">Delete</button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop