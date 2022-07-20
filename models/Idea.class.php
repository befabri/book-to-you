<?php
class Idea{
	
	private $_id_idea;
	private $_title;
	private $_text;
	private $_status;
	private $_date_submitted;
	private $_date_accepted;
	private $_date_refused;
	private $_date_closed;
	private $_id_member;
	private $_votes_count;
	private $_comments_count;

	public function __construct($id_idea, $title, $text, $status, $date_submitted, $date_accepted, $date_refused, $date_closed, $id_member, $votes_count="", $comments_count=""){
		$this->_id_idea = $id_idea;
		$this->_title = $title;
		$this->_text = $text;
		$this->_status = $status;
		$this->_date_submitted = $date_submitted;
		$this->_date_accepted = $date_accepted;
		$this->_date_refused = $date_refused;
		$this->_date_closed = $date_closed;
		$this->_id_member = $id_member;
		$this->_votes_count = $votes_count;
		$this->_comments_count = $comments_count;
	}
	
	public function id_idea(){
		return $this->_id_idea;
	}

	public function title(){
		return $this->_title;
	}
	
	public function text(){
		return $this->_text;
	}

	public function status(){
		return $this->_status;
	}

	public function date_submitted(){
		return $this->_date_submitted;
	}

	public function date_accepted(){
		return $this->_date_accepted;
	}

	public function date_refused(){
		return $this->_date_refused;
	}

	public function date_closed(){
		return $this->_date_closed;
	}

	public function id_member(){
		return $this->_id_member;
	}

	public function votes_count(){
		return $this->_votes_count;
	}

	public function comments_count(){
		return $this->_comments_count;
	}

	public function html_id_idea(){
		return htmlspecialchars($this->_id_idea);
	}

	public function html_title(){
		return htmlspecialchars($this->_title);
	}
	
	public function html_text(){
		return htmlspecialchars($this->_text);
	}

	public function html_status(){
		return htmlspecialchars($this->_status);
	}

	public function html_date_submitted(){
		return htmlspecialchars($this->_date_submitted);
	}

	public function html_date_accepted(){
		return htmlspecialchars($this->_date_accepted);
	}

	public function html_date_refused(){
		return htmlspecialchars($this->_date_refused);
	}

	public function html_date_closed(){
		return htmlspecialchars($this->_date_closed);
	}

	public function html_id_member(){
		return htmlspecialchars($this->_id_member);
	}

	public function html_votes_count(){
		return htmlspecialchars($this->_votes_count);
	}

	public function html_comments_count(){
		return htmlspecialchars($this->_comments_count);
	}

	public function change_status($status){
		if($this->status() != "CLOSED" && $status != "SUBMITTED" && $this->status() != $status){ 
			if($this->status() == "SUBMITTED" && $status == "CLOSED"){
				return false;
			}
			return true;
		}
		return false;
	}
}
?>