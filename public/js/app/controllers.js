'use strict';

/* Controllers */
var notesController = angular.module('notesController',[]);

// autosave time in seconds
var secondsToWaitBeforeSave = 2;


notesController.controller('notesController', function($scope, $timeout, $http, Note) {
	var timeout = null;

	var saveUpdates = function() {
		console.log("Saving updates to note " . $scope.note);
	}

	// Object to hold all notes data
	$scope.notes = [];

	// Call the get method in the services
	Note.get()
	.success(function(data) {
		$scope.notes = data;
		console.log(data);
	});

	$scope.$watch(
		"notes",
		function(newValue, oldValue, scope) {
			if ( newValue == oldValue ) {
				return;
			}

			console.log("$watch note.note has changed");
		});

	// Add a new note
	$scope.addNote = function() {
		Note.create()
		.success(function(data) {
			console.log(data);
		    	// reload notes model
		    	Note.get()
		    	.success(function(data) {
		    		$scope.notes = data;
		    	});

		    	if(!data.response) {
		    		console.log("there was an error");
		    	}
		    });
	}

	// delete a note
	$scope.deleteNote = function(id) {
		Note.delete(id)
		.success(function(data){
			console.log(data);
				// if successful, reload the notes list
				Note.get()
				.success(function(data) {
					$scope.notes = data;
				});

				if(!data.response) {
					console.log("there was an error");
				}

			});
	}

	$scope.noteUpdated = function(value, note) {
		$timeout(function() {
			console.log(note.note);
			Note.update(note)
			    .success(function(data) {
			    	console.log("Note updated");
			    })
		},2000);
	};

	/*var debounceUpdate = function(newVal, oldVal) {
	    console.log("did it get here?")
		if(newVal != oldVal) {
			console.log("model changes made")
			if(timeout) {
				$timeout.cancel(timeout);
			}
			timeout = $timeout(saveUpdates, secondsToWaitBeforeSave * 1000);
		}
	};

    $scope.$watch('note.note', debounceUpdate);  */
});
