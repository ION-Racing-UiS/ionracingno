<?php
class TeamGroup{
	public $name;
	public $id;
    public $members;
    public $image;
	
	function __construct($name, $id, $image, $members){
        $this->name = $name;
        $this->id = $id;
        $this->image = $image;
		$this->members = $members;
	}
}

class Member{
	public $name;
	public $role;
	public $image;
	
	function __construct($name, $role, $image){
		$this->name = $name;
		$this->role = $role;
		$this->image = $image;	
	}
}



$members = array(
new TeamGroup("The Board", "the_board","img/groups/the_board.jpg", array(
    new Member("Maren Joanna Julien", "Team Leader", "img/members/maren_joanna_julien.jpg"),
    new Member("Vegard Bror Trodal", "Coo", "img/members/vegard_bror_trodal.jpg"),
    new Member("Fredrik Rege", "Group Leader Administration/Economics", "img/members/fredrik_rege.jpg"),
    new Member("Yohannes Dawit Kassaye", "Group Leader Electronics", "img/members/yohannes_dawit_kassaye.jpg"),
    new Member("Andreas Byskov", "Electronic Systems Architect", "img/members/andreas_byskov.jpg"),
    new Member("Trym Pedersen", "Group Leader Chassis", "img/members/trym_pedersen.jpg"),
    new Member("Aksel Søraunet", "Group Leader Suspension", "img/members/aksel_soraunet.jpg")
)),
new TeamGroup("Administration", "administration","img/groups/administration.jpg", array(
    new Member("Fredrik Rege", "Group Leader Administration/Economics", "img/members/fredrik_rege.jpg"),
    new Member("Johan Bjørgvik", "Logistics/Sponsors", "img/members/johan_bjorgvik.jpg"),
    new Member("Olha Ivanova", "Event", "img/members/olha_ivanova.jpg"),
    new Member("Melissa Bamrungkho Thomassen", "Social media", "img/members/melissa_bamrungkho_thomassen.jpg"),
    new Member("Einar Gjerde", "Sponsors", "img/members/einar_gjerde.jpg"),
    new Member("Karoline Hjeldnes", "Event", "img/members/karoline_hjeldnes.jpg")
)),
new TeamGroup("Chassis", "chassis", "img/groups/chassis.jpg", array(
    new Member("Trym Pedersen", "Group Leader Chassis", "img/members/trym_pedersen.jpg"),
    new Member("Anders Gard", "Chassis Simulation", "img/members/anders_gard.jpg"),
    new Member("Martin Mildt", "Chassis Design", "img/members/martin_mildt.jpg"),
    new Member("Sigurd Grøvdal Hansen", "Firewall/Seat", "img/members/sigurd_grovdal_hansen.jpg"),
    new Member("Alexander Thorkildsen", "Mentor", "img/members/ion_stig.jpg")
)),
new TeamGroup("Suspension", "suspension","img/groups/suspension.jpg", array(
    new Member("Aksel Søraunet", "Group Leader Suspension", "img/members/aksel_soraunet.jpg"),
    new Member("Trygve Pollen", "Brakes/Pedal box", "img/members/trygve_pollen.jpg"),
    new Member("Olai Hagland", "Drivetrain", "img/members/ion_stig.jpg"),
    new Member("Ole Kristian Brettingen", "Suspension/dampers/ARB", "img/members/ole_kristian_brettingen.jpg"),
    new Member("Sondre Mikkelsen", "Suspension/dampers/ARB", "img/members/sondre_mikkelsen.jpg")
)),
new TeamGroup("Electronics", "electronics","img/groups/electronics.jpg", array( 
    new Member("Yohannes Dawit Kassaye", "Group Leader Electronics", "img/members/yohannes_dawit_kassaye.jpg"),
    new Member("Andreas Byskov", "Electronic Systems Architect", "img/members/andreas_byskov.jpg"),
    new Member("Per Gundersen Lund", "Motor-controller/HV-Circuitry", "img/members/per_gundersen_lund.jpg"),
    new Member("Raymond Tjørhom", "Accumulator", "img/members/raymod_tjorhom.jpg"),
    new Member("Mathias Skjelbred", "HV", "img/members/mathias_skjelbred.jpg"),
    new Member("Åse Marie Pettersen", "HV", "img/members/aase_marie_pettersen.jpg"),
    new Member("Håvard Soma", "Wiring harness", "img/members/haavard_soma.jpg"),
    new Member("Jesper Flatheim", "Wiring harness", "img/members/jesper_flatheim.jpg"),
    new Member("André Rabba", "ECU", "img/members/andre_rabba.jpg"),
    new Member("Eirik Berge Knudsen", "Mentor", "img/members/ion_stig.jpg")
)),
new TeamGroup("IT", "it","img/groups/it.jpg", array( 
    new Member("Truls Hansen Skadberg", "Group Leader IT/System Administrator/Developer", "img/members/truls_hansen_skadberg.jpg")
)),
)
?>
<div class="membersnav">
    <div class="container">
        <p>
            <a href="/team/2022">2022</a> |
            <a href="/team/2021">2021</a> |
			<a href="/team/2020">2020</a> |
			<a href="/team/2019">2019</a> |
            <a href="/team/2018">2018</a> | 
            <a href="/team/2017">2017</a> | 
            <a href="/team/2016">2016</a>
        </p>
        <p>
        <?php for ($i = 0; $i < sizeof($members); $i++){
            $curTeam = $members[$i]; ?>
            <a href="#<?php echo $curTeam->id ?>"><?php echo $curTeam->name?></a> <?php if ($i < sizeof($members) - 1) { ?>|<?php } ?>
        <?php } ?>
        </p>
    </div>
</div>

<div class="container">
    <div class="members">
<?php for ($i = 0; $i < sizeof($members); $i++){
        $curTeam = $members[$i]; ?>
        <div id="<?php echo $curTeam->id ?>" class="group">
            <div class="group-line">
                <span><a class="image-link" href="<?php echo $curTeam->image ?>"><?php echo $curTeam->name ?></a></span>
            </div>
            <div class="row">
            <?php for ($j = 0; $j < sizeof($curTeam->members); $j++){
                $curMember = $curTeam->members[$j]; ?>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="<?php echo $curMember->image ?>">
                        <h3><?php echo $curMember->name ?></h3>
                        <p><?php echo $curMember->role ?></p>
                    </div>
                </div>
            <?php }?>
        </div>
        <?php
    } ?>
    </div>
</div>
<?php

/*
<div class="membersnav">
    <div class="container">
        <p>
            <a href="#the_board">The Board</a> | 
            <a href="#marketing">Marketing</a> | 
            <a href="#monocoque">Monocoque</a> | 
            <a href="#suspension">Suspension</a> | 
            <a href="#aerodynamics">Aerodynamics</a> | 
            <a href="#high_voltage">High Voltage</a> | 
            <a href="#battery">Battery</a> | 
            <a href="#electronics_and_software">Electronics and Software</a>
        </p>
    </div>
</div>
<div class="container">
    <div class="members">
        
        <div id="the_board" class="group">
            <div class="group-line">
                <span><a class="image-link" href="photos/the_board/group_photo.jpg">The Board</a></span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/the_board/hans_kristian_holen__team_leader.jpg">
                        <h3>Hans Kristian Holen</h3>
                        <p>Team Leader</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/the_board/nickolay_falkenhaug__technical_leader.jpg">
                        <h3>Nickolay Falkenhaug</h3>
                        <p>Technical Leader</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/the_board/ola_naess_kaldestad__head_of_marketing.jpg">
                        <h3>Ola Næss Kaldestad</h3>
                        <p>Head of Marketing</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/the_board/henrik_knudsen__head_of_finance.jpg">
                        <h3>Henrik Knudsen</h3>
                        <p>Head of Finance</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="marketing" class="group">
            <div class="group-line">
                <span><a class="image-link" href="photos/marketing/group_photo.jpg">Marketing</a></span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/marketing/ola_naess_kaldestad__group_leader.jpg">
                        <h3>Ola Næss Kaldestad</h3>
                        <p>Group Leader</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/marketing/eirik_lie__event_manager.jpg">
                        <h3>Eirik Lie</h3>
                        <p>Event Manager</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/marketing/karoline_kverneland__sponsor_relations.jpg">
                        <h3>Karoline Kverneland</h3>
                        <p>Sponsor Relations</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/marketing/michael_thomson__sponsor_relations.jpg">
                        <h3>Michael Thomson</h3>
                        <p>Sponsor Relations</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/ion_stig.jpg">
                        <h3>Mahdi Aminy Tehrani</h3>
                        <p>Marketing</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/ion_stig.jpg">
                        <h3>Mats Moldesæter</h3>
                        <p>Newsletters</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="monocoque" class="group">
            <div class="group-line">
                <span>Monocoque</span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/monocoque/edvin_rygh__group_leader.jpg">
                        <h3>Edvin Rygh</h3>
                        <p>Group Leader</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/monocoque/hans_kristian_holen__ses.jpg">
                        <h3>Hans Kristian Holen</h3>
                        <p>SES</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/monocoque/carsten_christensen__rims.jpg">
                        <h3>Carsten Christensen</h3>
                        <p>Rims</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/monocoque/phillip_jamissen__crashbox.jpg">
                        <h3>Phillip Jamissen</h3>
                        <p>Crashbox</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/monocoque/audun_broenseth__nose.jpg">
                        <h3>Audun Brønseth</h3>
                        <p>Nose</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/monocoque/thomas_haug__inserts.jpg">
                        <h3>Thomas Haug</h3>
                        <p>Inserts</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/ion_stig.jpg">
                        <h3>Nora Kristiansen</h3>
                        <p>Ergonomics</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="suspension" class="group">
            <div class="group-line">
                <span><a class="image-link" href="photos/suspension/group_photo.jpg">Suspension</a></span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/suspension/simen_ekornaasvaag__group_leader.jpg">
                        <h3>Simen Ekornåsvåg</h3>
                        <p>Group Leader</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/suspension/tor_inge_berge__steering_gearbox.jpg">
                        <h3>Tor Inge Berge</h3>
                        <p>Steering</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/suspension/olaf_nornes_kvamsoey__suspension.jpg">
                        <h3>Olaf Nornes Kvamsøy</h3>
                        <p>Suspension</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/suspension/joakim_sandanger_pettersen__upright.jpg">
                        <h3>Joakim S. Pettersen</h3>
                        <p>Upright</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/suspension/fredrik_kalager__gear_and_brakes.jpg">
                        <h3>Fredrik Kalager</h3>
                        <p>Gear and Brakes</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/suspension/truls_metzoni_skoglund__drive_shaft.jpg">
                        <h3>Truls Metzoni Skoglund</h3>
                        <p>Drive Shaft</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/suspension/thea_emilie_finn__engine_housing.jpg">
                        <h3>Thea Emilie Finn</h3>
                        <p>Engine Housing</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/suspension/gaute_vagle__attenuators.jpg">
                        <h3>Gaute Vagle</h3>
                        <p>Dampers and ARB</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/suspension/aslak_tveit__pedalbox.jpg">
                        <h3>Aslak Tveit</h3>
                        <p>Pedalbox</p>
                    </div>
                </div>
            </div>
        </div>
       
        <div id="aerodynamics" class="group">
            <div class="group-line">
                <span><a class="image-link" href="photos/aero/group_photo.jpg">Aerodynamics</a></span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/aero/anders_steinsland__group_leader.jpg">
                        <h3>Anders Steinsland</h3>
                        <p>Group Leader</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/aero/marius_didriksen_larsen__battery_cooling.jpg">
                        <h3>Marius Didriksen Hansen</h3>
                        <p>Battery Cooling</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/aero/eirik_inge_hjelle__wings.jpg">
                        <h3>Eirik Inge Hjelle</h3>
                        <p>Wings</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/aero/tore_lundell-nygjelten__sidepods.jpg">
                        <h3>Tore Lundell-Nygjelten</h3>
                        <p>Sidepods</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/aero/magnus_hofstad__cooling.jpg">
                        <h3>Magnus Hofstad</h3>
                        <p>Cooling</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="high_voltage" class="group">
            <div class="group-line">
                <span><a class="image-link" href="photos/high_voltage/group_photo.jpg">High Voltage</a></span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/high_voltage/magnus_ljostveit__group_leader.jpg">
                        <h3>Magnus Ljostveit</h3>
                        <p>Group Leader</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/high_voltage/anders_helle__engine_control.jpg">
                        <h3>Anders Helle</h3>
                        <p>Engine Control</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/high_voltage/fredrik_moldvaer__pre-_and_discharge.jpg">
                        <h3>Fredrik Moldvær</h3>
                        <p>Pre- and Discharge</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/high_voltage/ove_nicolai_dalheim__pre-_and_discharge.jpg">
                        <h3>Ove Nicolai Dalheim</h3>
                        <p>Pre- and Discharge</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/ion_stig.jpg">
                        <h3>Sindre Hauge</h3>
                        <p>HVD</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="battery" class="group">
            <div class="group-line">
                <span><a class="image-link" href="photos/battery/group_photo.jpg">Battery</a></span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/battery/helge_vassbakk__group_leader.jpg">
                        <h3>Helge Vassbakk</h3>
                        <p>Group Leader</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/battery/nickolay_falkenhaug__bms.jpg">
                        <h3>Nickolay Falkenhaug</h3>
                        <p>BMS</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/battery/magnus_hoegden__battery_casing.jpg">
                        <h3>Magnus Høgden</h3>
                        <p>Battery Casing</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/battery/olav_riisa__accumulator_design.jpg">
                        <h3>Olav Riisa</h3>
                        <p>Accumulator Design</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="electronics_and_software" class="group">
            <div class="group-line">
                <span><a class="image-link" href="photos/electronics_and_software/group_photo.jpg">Electronics and Software</a></span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/electronics_and_software/aleksander_ferkingstad__group_leader.jpg">
                        <h3>Aleksander Ferkingstad</h3>
                        <p>Group Leader</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/electronics_and_software/nicolas_floeysvik__software_architecture.jpg">
                        <h3>Nicolas Fløysvik</h3>
                        <p>Software Architecture</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/electronics_and_software/fredrik_mikal_wold__telemetry.jpg">
                        <h3>Fredrik Mikal Wold</h3>
                        <p>Telemetry</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/electronics_and_software/fredrik_wigsnes_jensen__microcontrollers.jpg">
                        <h3>Fredrik Wigsnes Jensen</h3>
                        <p>Microcontrollers</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/electronics_and_software/magne_aardal__safety_circuits.jpg">
                        <h3>Magne Årdal</h3>
                        <p>Safety Circuits</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/electronics_and_software/olav_hobberstad__programming.jpg">
                        <h3>Olav Hobberstad</h3>
                        <p>Programming</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/electronics_and_software/stian_trondsen__graphical_ui.jpg">
                        <h3>Stian Trondsen</h3>
                        <p>Graphical UI</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/electronics_and_software/svein_ree__safety_circuits.jpg">
                        <h3>Svein Ree</h3>
                        <p>Safety Circuits</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/ion_stig.jpg">
                        <h3>Mikal Laursen</h3>
                        <p>ECU</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="member">
                        <img src="photos/ion_stig.jpg">
                        <h3>Ådne Løvik Lillehammer</h3>
                        <p>ECU</p>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</div>


*/

?>
