<?php

class NotesController extends BaseController {

    /**
     * The layout that should be used for responses
     */
    protected $layout = 'notes';

    /**
     * Action to display sticky notes
     */
    public function showNotes()
    {
        // Show notes if available
        $notes = Note::all();
        $this->layout->content = View::make('notes', array('notes'=> $notes));
        $this->layout->with('notes', $notes);
    }

    public function addNotes()
    {
        // Add new notes
        if(Request::isMethod('post'))
        {
            $note = new Note;
            $note->save();
            $note_id = $note->id;
            if($note_id) {
                return Response::json(array('response' => true, 'new_note_id' => $note_id));
            } else{
                return Response::json(array('response' => false));
            }
        }
    }

    public function deleteNotes()
    {
        if(Request::isMethod('post'))
        {
            $id = Input::get('id');
            $note = Note::find($id);
            if($note->delete())
            {
                return Response::json(array('response' => true));
            }else{
                return Response::json(array('response' => false));
            }

        }
    }

    public function updateNotes()
    {
        if(Request::isMethod('post'))
        {
            $params = Input::all();
            $note_id = $params['id'];
            $note_content = $params['content'];

            $note = Note::find($note_id);
            $note->note = $note_content;
            if($note->save())
            {
                return Response::json(array('response' => true));
            }else{
                return Response::json(array('response' => false));
            }
        }
    }

}