<?php
class moderator{
  abstract function queryByID(){

  }
  abstract function saveChange(){

  }
  abstract function newEntry(){

  }
  abstract function deleteEntry(){

  }
  abstract function registerChange(){
  }
  function save($id){
    if(queryByID($id)){
      saveChanges($id);
    } else {
      newEntry($id);
    }
  }
  function delete($id){
    if(queryByID($id)){
      deleteEntry($id);
    } else {
      return;
    }
  }
  abstract function getTitle(){

  }
  abstract function getBody(){

  }
}
class Artwork extends moderator{
  //properties
  private $artId;
  private $artTitle;
  private $artCreationDate;
  protected $artArtist;
  private $hasChanged;
  //methods
  function queryByID($artId){
    //query database for an entry based on ID
    echo "queryByID: Search database for ID, if found return object
      (Type: Artwork, ID: artId, Title: artTitle, Date: artCreationDate,
      Artist: artArtist). If not found, return notification 'Entry not found'";
//For the database functions, white a text version of what needs to
// happen to a log file (IE: "Object Edits Saved (type: Artist, ID: 5):
// Field=>New Value, Field =>New Value")
  }
  function registerChange($didChange){
    $this->$hasChanged = $didChange;
  }
  function saveChange(){
    if($this->$hasChanged){
      //save changes
    }
  }
  function newEntry(){
    // save a new entry to the database ?? Should this be the constructor?
  }
  function deleteEntry($id){
    $artId=null;
    $artTitle=null;
    $artCreationDate=null;
    $artArtist=null;
    $hasChanged=null;
    // delete an entry from the database
  }
}
class Artist extends moderator{
  //properties
  private $artistId;
  private $artistDOB;
  private $artistDateOfDeath;
  protected $artistWorks;
  private $hasChanged;
  //methods
  function queryByID($artistId){
    //query database for an entry based on ID
    echo "queryByID: Search database for ID, if found return object
      (Type: Artist, ID: artistId, Date of Birth: artistDOB, Date of Death:
      artistDateOfDeath, Portfolio: artistWorks). If not found,
      return notification 'Entry not found'";
//For the database functions, white a text version of what needs to
// happen to a log file (IE: "Object Edits Saved (type: Artist, ID: 5):
// Field=>New Value, Field =>New Value")
  }
  function registerChange($didChange){
    $this->$hasChanged = $didChange;
  }
  function saveChange(){
    if($this->$hasChanged){
      //save changes
    }
  }
  function newEntry(){
    // save a new entry to the database ?? Should this be the constructor?
  }
  function deleteEntry($id){
    $artId=null;
    $artTitle=null;
    $artCreationDate=null;
    $artArtist=null;
    $hasChanged=null;
    // delete an entry from the database
  }
}


 ?>
