<!--<style>

@bg-color: #913D88;
@txt-color: #FFFFFF;
@icn-color: #FFFFFF;

/*** DEMO ***/
html,body{height:100%;margin:0;}body{background:@bg-color;font:13px monospace;color:@txt-color}p{margin-top:30px}.cntr{display:table;width:100%;height:100%;.cntr-innr{display:table-cell;text-align:center;vertical-align:middle}}

/*** STYLES ***/
.search {
	display: inline-block;
	position: relative;
	height: 35px;
	width: 35px;
	box-sizing: border-box;
	margin: 0px 8px 7px 0px;
	padding: 7px 9px 0px 9px;
	border: 3px solid @icn-color;
	border-radius: 25px;
	transition: all 200ms ease;
	cursor: text;
	
	&:after {
		content: "";
		position: absolute;
		width: 3px;
		height: 20px;
		right: -5px;
		top: 21px;
		background: @icn-color;
		border-radius: 3px;
		transform: rotate(-45deg);
		transition: all 200ms ease;
	}
	
	&.active,
	&:hover {
		width: 200px;
		margin-right: 0px;
		
		&:after {
			height: 0px;	
		}
	}
	
	input {
		width: 100%;
		border: none;
		box-sizing: border-box;
		font-family: Helvetica;
		font-size: 15px;
		color: inherit;
		background: transparent;
		outline-width: 0px;
	}
}
</style>

<script> $("#inpt_search").on('focus', function () {
	$(this).parent('label').addClass('active');
});

$("#inpt_search").on('blur', function () {
	if($(this).val().length == 0)
		$(this).parent('label').removeClass('active');
}); </script>   -->




<div class="jumbotron jumbotron-fluid">
    <div class="container">
           
        <h1 class="display-4 text-center"> Travel Freak</h1>
        <p class="lead text-center">Dont listen to what they say,go see..!</p>
        <!--<img src="images/smlogo.jpg" class="mx-auto d-block image-fluid" alt="">-->
        <hr class="my-4">
        <br><br>
        
        <div class="cntr">
	        <div class="cntr-innr">
	            <label class="search" for="inpt_search">
			    <input id="inpt_search" type="text" />
		        </label>
		        <p>Hover to see the magic.</p>
	        </div>
        </div>

        <h1 class="text-center lead">You will enjoy these places...!</h1>
        
    </div>
</div>