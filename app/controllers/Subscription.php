<?php

public function insert(){
		
	if($this->email && $this->verify_token) {

		$stmt = $this->conn->prepare("
		INSERT INTO ".$this->subscribeTable."( `email`, `verify_token`)
		VALUES(?,?,?)");
	
		$this->email = htmlspecialchars(strip_tags($this->email));
		$this->verify_token = htmlspecialchars(strip_tags($this->verify_token));					
		
		$stmt->bind_param("sss",$this->email, $this->verify_token);
		
		if($stmt->execute()){
			return true;
		}		
	}
}
//to insert the subscriber details into database table

public function update(){
	
	if($this->verify_token) {			
		
		$stmt = $this->conn->prepare("
		UPDATE ".$this->subscribeTable." 
		SET is_verified= ? WHERE verify_token = ?");
 
		$this->verify_token = htmlspecialchars(strip_tags($this->verify_token));
				
		$stmt->bind_param("is", $this->is_verified, $this->verify_token);
		
		if($stmt->execute()){
			return true;
		}
		
	}	
}

//to update the subscriber details into database table