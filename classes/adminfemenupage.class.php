<?php
class AdminFEMenuPage extends AdminPage
{	
	function __construct()
	{	parent::__construct("ADMIN");
	} //  end of fn __construct

	function LoggedInConstruct()
	{	parent::LoggedInConstruct();
		if ($this->user->CanUserAccess("technical"))
		{	$this->AdminMenuLoggedInConstruct();
		}
	} // end of fn LoggedInConstruct
	
	function AdminMenuLoggedInConstruct()
	{	$this->breadcrumbs->AddCrumb("femenulist.php", "Front End Menus");
	} // end of fn AdminMenuLoggedInConstruct
	
	function AdminMenuBody()
	{	
	} // end of fn AdminMenuBody
	
	function AdminBodyMain()
	{	if ($this->user->CanUserAccess("technical"))
		{	$this->AdminMenuBody();
		}
	} // end of fn AdminBodyMain
	
} // end of defn AdminFEMenuPage
?>