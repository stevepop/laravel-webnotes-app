@extends('master')

@section('content')
    <div id="sticky-notes" ng-controller="notesController">
        <div ng-repeat="note in notes" class="sticky-note">
        	<textarea id="stickynote-{{note.id}}" 
        		ng-model="note.note"
        		ng-change="noteUpdated(note, note)"> 
        		{{ note.note }}</textarea>
        	<a href="" ng-click="deleteNote(note.id)" class="delete-sticky">X</a>
        </div>
        <a href="" ng-click="addNote()"><div id="create" >+</div></a>
    </div>
    <div class="clear-both"></div>
@stop