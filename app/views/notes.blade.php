@extends('master')

@section('content')
    <div id="sticky-notes">
        @foreach ($notes as $note)
         	<div class="sticky-note">
        		<textarea id="stickynote- {{ $note->id }}"> {{ $note->note }}</textarea>
        		<a href="#" id="remove-{{ $note->id }}" class="delete-sticky">X</a>
        	</div>
        @endforeach
        <div id="create">+</div>
    </div>
    <div class="clear-both"></div>
@stop