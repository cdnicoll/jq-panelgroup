<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Conforming XHTML 1.0 Strict Template</title>
		
		<link rel="stylesheet" type="text/css" href="http://192.168.0.141/_common_libraries/zeroOut.css">
		
        <link rel="stylesheet" type="text/css" href="jquery.panelGroup.css">
        
        <script type="text/javascript" src="http://192.168.0.141/_common_libraries/jquery.js"></script>
        <script type="text/javascript" src="http://192.168.0.141/_common_libraries/jquery.json.min.js"></script>
        <script type="text/javascript" src="http://192.168.0.141/_common_libraries/jquery-ui-1.7.2.custom/js/jquery-ui-1.7.2.custom.min.js"></script>
        
        <script type="text/javascript" src="jquery.panelGroup.js"></script>

        <!--============== JS ============== -->
        <script type="text/javascript" charset="utf-8">
           var jQ = jQuery.noConflict();
            jQ(document).ready(function()
            {
                jQ('.sort_grid').panelGroup('table1');
                jQ('.sort_column').panelGroup('table2');
                jQ('.sort_row').panelGroup('table3');
            });
        </script>
	</head>
	<body>
        
        <div id="main_container">
            <br />
            <hr /><h2>Sort Grid</h2><hr />
            <br />
            
            <ul id="sort_grid_holder">
                <!-- === COLUMN 1 === -->
            	<ul id="column_1" class="sort_grid">
                	<li id="box_1" >
                	   <h3 class="drag_handle">row 1 Row 1</h3>
                	   <p>Just a small bit of information for now.</p>
                	</li>
            	
                	<li id="box_2" >
                	   <h3 class="drag_handle">row 2  Row 1</h3>
                	   <p>Just a small bit of information for now.</p>
                	</li>
            	
                	<li id="box_3" >
                	   <h3 class="drag_handle">row 3 Row 1</h3>
                	   <p>Just a small bit of information for now.</p>
                	</li>
                </ul>
                
                <!-- === COLUMN 2 === -->
            	<ul id="column_2" class="sort_grid">
                	<li id="box_4" >
                	   <h3 class="drag_handle">row 4 Row 2</h3>
                	   <p>Just a small bit of information for now.</p>
                	</li>
            	
                	<li id="box_5" >
                	   <h3 class="drag_handle">row 5 Row 2</h3>
                	   <p>Just a small bit of information for now.</p>
                	</li>
                </ul>
                
                <!-- === COLUMN 3 === -->
                <ul id="column_3" class="sort_grid">
                    <li id="box_6" >
                	   <h3 class="drag_handle">row 6 Row 3</h3>
                	   <p>Just a small bit of information for now.</p>
                	</li>
                </ul>
            </ul>
            
            <div id="clear"></div>
            <br />
            <hr /><h2>Sort Columns</h2><hr />
            <br />
            
            <!-- === SORT COLUMNS === -->
            <ul class="sort_column">
            	<li id="row1" >
            	   <h3 class="drag_handle">row 1</h3>
            	   <p>Just a small bit of information for now.</p>
            	</li>
            	
            	<li id="row2" >
            	   <h3 class="drag_handle">row 2</h3>
            	   <p>Just a small bit of information for now.</p>
            	</li>
            	
            	<li id="row3" >
            	   <h3 class="drag_handle">row 3</h3>
            	   <p>Just a small bit of information for now.</p>
            	</li>
            </ul>
            
            <div id="clear"></div>
            <br />
            <hr /><h2>Sort Rows</h2><hr />
            <br />
 
            <!-- === SORT ROWS === -->
            <ul class="sort_row">
            	<li id="row1" >
            	   <h3 class="drag_handle">row 1</h3>
            	   <p>Just a small bit of information for now.</p>
            	</li>
            	
            	<li id="row2" >
            	   <h3 class="drag_handle">row 2</h3>
            	   <p>Just a small bit of information for now.</p>
            	</li>
            	
            	<li id="row3" >
            	   <h3 class="drag_handle">row 3</h3>
            	   <p>Just a small bit of information for now.</p>
            	</li>
            </ul>           
            
            
            
            
            
             <div id="clear"></div>
        </div>
        
	</body>
</html>