var space = {};
space.init = (function(){
		// set the scene size
		space.x = $(document).width();
		space.y = $(document).height();
		space._x_ = space.x/2;
		space._y_ = space.y/2;
		space.scale = .2;

		// set some camera attributes
		space.view = {};
		space.view.angle = 45;
		space.view.aspect = space.x / space.y;
		space.view.near = 0.1;
		space.view.far = 10000;

		// get the DOM element to attach to
		// - assume we've got jQuery to hand
		space.dom = $('#space');

		// create a WebGL renderer, camera
		// and a scene
		space.render = new THREE.WebGLRenderer();
		//space.render = new THREE.CanvasRenderer();
		//space.render = new THREE.SVGRenderer();
		space.camera = new THREE.PerspectiveCamera(
			space.view.angle
			,space.view.aspect
			,space.view.near
			,space.view.far
		);
		space.scene = new THREE.Scene();

		// the camera starts at 0,0,0 so pull it back
		space.camera.position.z = 300;

		// start the renderer
		space.render.setSize(space.x, space.y);

		// attach the render-supplied DOM element
		space.dom.append(space.render.domElement);
		space.scene.add(space.camera);
		space.animate();
	});
	space.sphere = (function(s){
		// set up the sphere vars
		s = $.extend({
			radius: 50
			,segments: 16
			,rings: 16
			,material: space.material()
			,x: 50
			,y: 50
			,z: 50
		},s);
		// create a new mesh with sphere geometry -
		// we will cover the sphereMaterial next!
		var sphere = new THREE.Mesh(
		   new THREE.SphereGeometry(
			   s.radius,
			   s.segments,
			   s.rings
			   ),
		   s.material
		);
		// set its position
		sphere.position.x = s.x;
		sphere.position.y = s.y;
		sphere.position.z = s.z;
		// add the sphere to the scene
		space.scene.add(sphere);
		return sphere;
	});
	space.box = (function(b){
		// set up the box vars
		b = $.extend({
			width: b.size||5
			,height: b.size||5
			,depth: b.size||5
			,segwidth: 1
			,segheight: 1
			,segdepth: 1
			,material: space.material()
			,x: 50
			,y: 50
			,z: 50
		},b);
		// create a new mesh with box geometry -
		var box = new THREE.Mesh(
		   new THREE.CubeGeometry(
			   b.width,
			   b.height,
			   b.depth,
			   b.segwidth,
			   b.segheight,
			   b.segdepth
			   ),
		   b.material
		);
		// set its position
		box.position.x = b.x;
		box.position.y = b.y;
		box.position.z = b.z;
		// add the box to the scene
		space.scene.add(box);
		return box;
	});
	space.text = (function(t){return false;
		// set up the text vars
		t = $.extend({
			text: "Hello World!"
			,material: space.material()
			,x: 50
			,y: 50
			,z: 50
		},t);
		// create a new mesh with text geometry -
		// we will cover the sphereMaterial next!
		var text = new THREE.Mesh(
		   new THREE.TextGeometry(
			   "BOO!",
			   { size: 10, height: 5, curveSegments: 6, style: "bold" }
			   )
		   ,t.material
		);
		// set its position
		/*text.position.x = s.x;
		text.position.y = s.y;
		text.position.z = s.z;*/
		// add the text to the scene
		space.scene.add(text);
		//return text;
	});
	space.light = (function(l){
		// create a point light
		l = $.extend(l,{
			x: 10
			,y: 50
			,z: 130
			,color: 0xFFFFFF
		});
		var light = new THREE.PointLight( l.color );

		// set its position
		light.position.x = l.x;
		light.position.y = l.y;
		light.position.z = l.z;

		// add to the scene
		space.scene.add(light);
		return light;
	});
	space.material = (function(m){
		return new THREE.MeshLambertMaterial({
			color: 0xCC0000
		});
	});
	
	space.frame = function(){};
	space.animate = (function(cb) {
		requestAnimationFrame(space.animate);
		if(typeof space.frame == 'function'){
			space.frame();
		} else if(typeof cb == 'function'){
			cb();
		};
		space.render.render(space.scene,space.camera);
	});