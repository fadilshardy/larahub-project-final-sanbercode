@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="title my-3">
                Selamat datang di forum Laravel!
            </h1>
            <hr>

            <div class="row">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">Kumpulan pertanyaan</h4>
                            </div>

                            <div>
                                <p class="d-inline-block mb-0">
                                    Ingin membuat pertanyaan baru?
                                </p>
                                <a href="/pertanyaan/create" class="btn btn-sm btn-success ml-2">
                                    <i class="fa fa-edit"></i> Create
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            @foreach ($questions as $key => $item)
                            {{-- start of 1 question  --}}
                            <div id="question" href="" class="col-sm-12 row">
                                <div class="col-sm-10">
                                    <h5 class="card-subtitle">
                                        <a href="/pertanyaan/{{$item->id}}">{{$item->title}}</a>
                                        {{-- <form action="/pertanyaan/{{$item->id}}/upvote" method="POST"
                                            style="display:inline">
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                +
                                            </button>
                                        </form> --}}
                                    </h5><br>
                                    <p class="card-text">pembuat: {{$item->user->name}}</p>
                                    <div class="tags">
                                        @foreach ($item->tag as $tag_question)
                                        <button class="btn btn-info btn-sm">#{{$tag_question->tag_name}}</button>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-sm-2 summary d-flex align-items-center justify-content-end">
                                    <div class="col-sm" style="margin-left: -10px">
                                        <form action="/pertanyaan/{{$item->id}}/upvote" method="POST">
                                            @csrf
                                            <button class="btn btn-lg btn-vote">
                                                <h5>{{$item->upvote_count()}}</h5>
                                                <p>up</p>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-sm" style="margin-left: 10px">
                                        <form action="/pertanyaan/{{$item->id}}/downvote" method="POST">
                                            @csrf
                                            <button class="btn btn-lg btn-vote">
                                                <h5>{{$item->downvote_count()}}</h5>
                                                <p>down</p>
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                            {{-- end of 1 question --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header">Explore by Tags</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-star" aria-hidden="true"></i> Node.JS</li>
                            <li class="list-group-item"><i class="fa fa-star" aria-hidden="true"></i> HTML</li>
                            <li class="list-group-item"><i class="fa fa-star" aria-hidden="true"></i> CSS</li>
                            <li class="list-group-item"><i class="fa fa-star" aria-hidden="true"></i> PHP</li>
                            <li class="list-group-item"><i class="fa fa-star" aria-hidden="true"></i> JavaScript</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection