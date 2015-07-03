@extends('layouts.main', ['selectItem' => 'projects'])

@section('page_title')
Gerenciamento de projetos - 
@stop

@section('content')
    <h1 class="page-header">
        <i class="fa fa-fw fa-files-o"></i> Projetos
        <small><a href="{!! route('project.create') !!}"><i class="fa fa-plus"></i> projeto</a></small>
    </h1>

    @include('partials.search')
    @include('partials.alerts')

    @foreach(array_chunk($projects->items(), 3) as $projectChunk)
        <div class="row">
            @foreach($projectChunk as $project)
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {!! $project->name !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

@stop

@section('scripts')
@parent
    <script src="{{ elixir('js/projects.js') }}"></script>
@stop