<?php
<?java
var frmvalidator  = new Validator("register");
frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("name","req","Please provide your name");

frmvalidator.addValidation("email","req","Please provide your email address");

frmvalidator.addValidation("email","email","Please provide a valid email
     address");

frmvalidator.addValidation("username","req","Please provide a
	username");

 frmvalidator.addValidation("password","req","Please provide a
	    password");
>
function RegisterUser()
{
    if(!isset($_POST['submitted']))
    {
    	 return false;
    }
    $formvars = array();
			         
    if(!$this->ValidateRegistrationSubmission())
    {
	 return false;
    }
						          
    $this->CollectRegistrationSubmission($formvars);
							           
    if(!$this->SaveToDatabase($formvars))
    {
    	 return false;
    }
										            
    if(!$this->SendUserConfirmationEmail($formvars))
    {
	 return	false;
    }				 
    $this->SendAdminIntimationEmail($formvars);
										    return true;
}
function SaveToDatabase(&$formvars)
{
	if(!$this->DBLogin())
        {
	    $this->HandleError("Database login failed!");
	    return false;
        }
 	if(!$this->Ensuretable())
	{
	    return false;
	}
	
	if(!$this->IsFieldUnique($formvars,'email'))
	{
	    $this->HandleError("This email is already registered");			    return false;
	}
	if(!$this->IsFieldUnique($formvars,'username'))
	{
	    $this->HandleError("This UserName is already used. Please try another username");
	    return false;
	}        
											if(!$this->InsertIntoDB($formvars))
	{
	    $this->HandleError("Inserting to Database failed!");
	    return false;
	}
	return true;
}
function CreateTable()
{
    $qry = "Create Table $this->tablename (".
            "id_user INT NOT NULL AUTO_INCREMENT ,".
 	    "name VARCHAR( 128 ) NOT NULL ,".
	    "email VARCHAR( 64 ) NOT NULL ,".
	    "phone_number VARCHAR( 16 ) NOT NULL ,".
	    "username VARCHAR( 16 ) NOT NULL ,".
	    "password VARCHAR( 32 ) NOT NULL ,".
	    "confirmcode VARCHAR(32) ,".
	    "PRIMARY KEY ( id_user )".
	    ")";
    if(!mysql_query($qry,$this->connection))
    {
	$this->HandleDBError("Error creating the table \nquery was\n $qry");
	return false;
    }
    return true;
}

function InsertIntoDB(&$formvars)
{
    $confirmcode = $this->MakeConfirmationMd5($formvars['email']);
     
    $insert_query = 'insert into '.$this->tablename.'(
	    name,
            email,
	    username,
	    password,
	    confirmcode
            )
	    values
	    (
	    "' . $this->SanitizeForSQL($formvars['name']) . '",
	    "' . $this->SanitizeForSQL($formvars['email']) . '",
	    "' . $this->SanitizeForSQL($formvars['username']) . '",
	    "' . md5($formvars['password']) . '",
	    "' . $confirmcode . '"							    )';      
    if(!mysql_query( $insert_query ,$this->connection))
    {										        $this->HandleDBError("Error inserting data to the table\nquery:$insert_query");
	return false;
    }        
    return true;
}
function SendUserConfirmationEmail(&$formvars)
{
    $mailer = new PHPMailer();
    $mailer->CharSet = 'utf-8';
    $mailer->AddAddress($formvars['email'],$formvars['name']);
    $mailer->Subject = "Your registration with ".$this->sitename;
    $mailer->From = $this->GetFromAddress();
    $confirmcode = urlencode($this->MakeConfirmationMd5($formvars['email']));
    $confirm_url = $this->GetAbsoluteURLFolder().'/confirmreg.php?code='.$confirmcode;
    $mailer->Body ="Hello ".$formvars['name']."\r\n\r\n".
    "Thanks for your registration with ".$this->sitename."\r\n".
    "Please click the link below to confirm your registration.\r\n".
    "$confirm_url\r\n".
    "\r\n".
    "Regards,\r\n".
    "Webmaster\r\n".
    $this->sitename;
    if(!$mailer->Send())
    {
        $this->HandleError("Failed sending registration confirmation
	    email.");
        return false;
    }
    return true;
}
>
