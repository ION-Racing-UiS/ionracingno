<!doctype html>
<html>

<head>
  <title>Model | ION Racing</title>
  <link rel="icon" type="image/png" href="../images/favicon.png">

  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,300,600,400' rel='stylesheet' type='text/css'>
  <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>
  <link rel="stylesheet" href="modelstyleold.css">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="robots" content="noindex" />
	<script src="js/javascript.js"></script>
	<script src="js/parallax.js"></script>

</head>

<body style="overflow: hidden;">

  <?php
    $page = "model";
    include("../layout/header.php");
  ?>

  <script src="modelappold.js"></script>

  <script src="js/three.min.js"></script>  
  <script src="js/OrbitControls.js"></script>
  <script src="obj.js"></script>
  <script src="js/raphael.2.1.0.min.js"></script>
  <script src="js/justgage.1.0.1.min.js"></script>
  <script src="js/Detector.js"></script>
 
  <div id="container">

  <div id="progbox" style="background-color: #fff; padding: 10px 20px; border: 1px solid #000; width:  310px; position: absolute; top: 40%; left: 50%; margin-left: -155px;">
    <h3 style="text-align: center; margin: 0; margin-top: 10px;">Loading model...  <i class="fa fa-spinner fa-pulse"></i></h3>
    <hr style="border-color: #bfbfbf;">
    <p>The loading time depends on your bandwith, and may take a few seconds.</p>
  </div>

    <div id="gauge" class="200x160px">	
			<script>
			
			setInterval(function() {g1.refresh(getRandomInt(50, 100));},1000);
			
			var g1 = new JustGage({
				id: "gauge",
				value: 0,
				min: 0,
				max: 100,
				title: "Strømbruk",
        titleFontColor: "White"
			});

			
			</script>
		</div>
		<div id="gauge2" class="200x160px">
			<script>
			setInterval(function() {g2.refresh(getRandomInt(50, 100));},1000);
			var g2 = new JustGage({
				id: "gauge2",
				value: 0,
				min: 0,
				max: 100,
				title: "Hastighet",
        titleFontColor: "White"
			});
			</script>
		</div>
		<div id="gauge3" class="200x160px">
			<script>
			setInterval(function() {g3.refresh(getRandomInt(50, 100));},1000);
			var g3 = new JustGage({
				id: "gauge3",
				value: 0,
				min: 0,
				max: 100,
				title: "Temperatur",
        titleFontColor: "White"
			});
			</script>
		</div>
	</div> 	


		
		<script>    var container;
    var camera, controls, scene, renderer;
    var skyboxMesh;
    var idle = 0;
    init();
    render();

    function animate() {


      requestAnimationFrame(animate);
      if (idle > 0) {
        idle--;
      } else {
        controls.autoRotate = true;
      }

      controls.update();


    }

    function init() {
      if (!Detector.webgl) Detector.addGetWebGLMessage();

      camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 200, 11000);
      camera.position.z = 1000;

      controls = new THREE.OrbitControls(camera);
      controls.damping = 0.2;
      controls.maxPolarAngle = (5 * Math.PI) / 12;
      controls.noPan = true;
      controls.minDistance = 560;
      controls.maxDistance = 800;
      controls.addEventListener('change', render);
      controls.autoRotate = true;



      scene = new THREE.Scene();


      // world
      var texture = THREE.ImageUtils.loadTexture("textures/asphalt.jpg");
      texture.wrapS = THREE.RepeatWrapping;
      texture.wrapT = THREE.RepeatWrapping;
      texture.repeat.set(12, 12);
      var groundMaterial = new THREE.MeshPhongMaterial({ map: texture,
        shininess: 1
      });

      var mesh = new THREE.Mesh(new THREE.CircleGeometry(5000, 100), groundMaterial);
      mesh.position.y = -12;
      mesh.rotation.x = -Math.PI / 2;
      mesh.receiveShadow = true;
      scene.add(mesh);

      // Cubes
      // skybox
      var imagePrefix = "textures/skybox/";
      var directions = ["desert_back", "desert_front", "desert_top", "desert_left", "desert_right", "desert_left"];
      var imageSuffix = ".jpg";
      var skyGeometry = new THREE.CubeGeometry(10000, 10000, 10000);

      var materialArray = [];
      for (var i = 0; i < 6; i++)
        materialArray.push(new THREE.MeshBasicMaterial({
          map: THREE.ImageUtils.loadTexture(imagePrefix + directions[i] + imageSuffix),
          side: THREE.BackSide
        }));
      var skyMaterial = new THREE.MeshFaceMaterial(materialArray);
      var skyBox = new THREE.Mesh(skyGeometry, skyMaterial);

      scene.add(skyBox);

      // textures
      var geometry = new THREE.Geometry();
      var manager = new THREE.LoadingManager();
      manager.onProgress = function (item, loaded, total) {
        console.log(item, loaded, total);
      };
      var onProgress = function (xhr) {
        if (xhr.lengthComputable) {
          var percentComplete = xhr.loaded / xhr.total * 100;
          console.log(Math.round(percentComplete, 2) + '% downloaded');
        }
      };
      var onError = function (xhr) {
        console.log("an error occured!");
      };

      // model

      var loader = new THREE.JSONLoader();

      loader.load('car_new.js', function (geometry, materials) {
        var material = new THREE.MeshLambertMaterial({ color: 0x929292, shading: THREE.FlatShading, overdraw: 0.5 });
        var object = new THREE.Mesh(geometry, material);
        object.position.x = 250;
        object.position.z = 0;
        object.scale.set(0.2, 0.2, 0.2);
        scene.add(object);

        document.getElementById("progbox").style.display = "none";
      }, onProgress, onError);





      // lights

      light = new THREE.DirectionalLight(0xffffff);
      light.position.set(1, 1, 1);
      scene.add(light);

      light = new THREE.DirectionalLight(0x002288);
      light.position.set(-1, -1, -1);
      scene.add(light);

      light = new THREE.AmbientLight(0x222222);
      scene.add(light);


      // renderer

      renderer = new THREE.WebGLRenderer({ antialias: true });
      renderer.setClearColor(0xf0f0f0);
      renderer.setPixelRatio(window.devicePixelRatio);
      renderer.setSize(window.innerWidth, window.innerHeight);

      container = document.getElementById('container');
      container.appendChild(renderer.domElement);

      //


      window.addEventListener('resize', onWindowResize, false);
      window.addEventListener('mousedown', onMouseDown, false);
      window.addEventListener('mouseup', onMouseUp, false);

      animate();


    }
    function onMouseDown() {
      controls.autoRotate = false;
      idle = 250;

    }
    function onMouseUp() {
      idle = 250;
    }

    function onWindowResize() {

      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
      render();

    }

    function render() {
      renderer.render(scene, camera);


    }



			</script>

      <?php
        include("../layout/analytics.php");
      ?>
		</body>
</html>
