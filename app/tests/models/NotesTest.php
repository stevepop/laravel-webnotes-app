<?php

class NotesTest extends TestCase {

    /**
     * Test for the Notes Model.
     *
     * @return void
     */
    public function setUp(){
        parent::setUp();
        Artisan::call('migrate');
        $this->seed();
        $this->model=new Note;
        Note::boot();
    }

    public function testNoteIsInstanceOfEloquent()
    {
        $this->assertTrue($this->model instanceof Eloquent);
    }

}