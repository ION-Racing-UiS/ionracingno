<?php 
function isActive($p) {
	global $page;
	if ($page == $p) {
		echo 'class="active"';
	}
}
?>

<div id="navpad"></div>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <!-- Brand and mobile menu toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar ib1"></span>
                <span class="icon-bar ib2"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="/libs/logos/ION_Racing.png">
                
            </a>
            <a class="navbar-brand" href=""/>
                <img src="/libs/logos/MECA_alt.png">
            </a>
        </div>

        <!-- Collapsible nav items -->
        <div id="myCollapse" class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php isActive("Home") ?> ><a href="/">Home</a>
                </li>
                <!-- <li <?php if($page == "Blog") echo 'class="active"' ?> ><a href="/blog">Blog</a>
                </li> -->
                <li <?php isActive("Sponsors") ?> ><a href="/sponsors">Sponsors</a>
                </li>
                <li <?php isActive("Competition") ?> ><a href="/competition">Competition</a>
                </li>
                <li <?php isActive("Team") ?> ><a href="/team/2020">Team</a>
                </li>
                <li <?php isActive("Garage") ?>><a href="/garage">Garage</a>
                </li>
                <li <?php isActive("Contact") ?> ><a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="/layout/js/navbar.js"></script>