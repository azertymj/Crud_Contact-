@extends('layouts.base')

@section('content')
    <main>
        <!-- Button trigger modal -->

        {{-- {{dd($message)}} --}}
        @if (@isset($message))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="row mb-3 card p-3">
            @include('contact.formulaire')
        </div>

        <h2 class="display-6 text-center mb-4">Liste des contacts</h2>

        <div class="table-responsive">
            @include('contact.table')
        </div>
    </main>
@endsection


@section('js')
    <script>
        new DataTable('#example');
    </script>
@endsection
