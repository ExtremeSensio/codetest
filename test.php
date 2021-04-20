<?php

class Test {

    private $data;

    //test 1: add the data params to the class variables
    function __construct( array $data ) {}

    //test 2: Loop all data and Capitilize the title
    function formatTitle() {}

    //test 2: Loop all data and get the first 20 charactere
    function formatContent() {}

    //test 2: Loop all data and add link to the array like 'http://localhost:8888/codetest/{id}'
    function addLink() {}

    //test 4: Go to the index.php and create a list with 
    public function get() 
    {
        return $this->data ? $this->data : [];
    }

}