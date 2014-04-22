'use strict';

/* Services */

angular.module('notesService', [])
	.factory('Note', function($http) {
		return {
			// get all the comments
			get : function() {
				return $http.get('/notes/list');
			},

			create : function() {
				return $http({
					method: 'POST',
					url: '/notes/add',
					data: ""
				});

			},

			update : function(id) {
				console.log('updated ' + id);
				var note_id = id;
				return $http({
					method: 'POST',	
					url: 'notes/update',
					data: note_id
				});
			},

			delete : function(id) {
				console.log("I am in delete function " + id);
				var note_id = id;

				return $http({
					method: 'POST',
					url: '/notes/remove',
					data: note_id
				});
			}
		}
	});
