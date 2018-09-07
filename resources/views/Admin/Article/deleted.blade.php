@extends('Admin.master')

@section('title','被删除文章列表')

@section('menu','文章')
@section('page','被删除文章列表')

@section('pageName','被删除文章列表')

@section('content')
    <a href="http://zq.1i1l.com/myblog/public/article/create" style="margin-left:10px;" class="pull-left btn btn-info clear-filter" title="clear filter">写文章</a>

    <table id="responsive-example-table" class="table large-only table-hover " >
        <thead>
        <tr class="text-right">
            <th style="width:14%;">#</th>
            <th style="width:12%;">title</th>
            <th style="width:12%;">所属分类</th>
            <th style="width:12%;">浏览次数</th>
            <th style="width:12%;">创建时间</th>
            <th style="width:18%;">作者</th>
            <th style="width:20%;">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($article as $item)
            <tr class="">
                <td>{{$item['id']}}</td>
                <td>{{$item['title']}}</td>
                <td>{{$item['categories']}}</td>
                <td>{{$item['views']}}</td>
                <td>{{$item['created_at']}}</td>
                <td>{{$item['author']}}</td>
                <td>

                        <a href="http://zq.1i1l.com/myblog/public/restore/{{$item['id']}}" style="margin-left:10px;" class=" btn btn-info " title="文章恢复"><span class="entypo-pencil"></span>&nbsp;&nbsp;恢复</a>


                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
    {!! $paginate->render() !!}
@endsection

@section('js')
    {!! reminder()->message() !!}
@endsection