<!--- Template --->
<?php
// Debug lines
//print_r($this->user_query);
//echo $this->user_query['username'];

    while ( $row = $this->user_query->fetch() )
	{
	    echo $row['id']." ";
        echo $row['username'];
        echo '<BR>';
	}

?>