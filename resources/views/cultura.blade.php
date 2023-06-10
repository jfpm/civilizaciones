<x-app-layout>
  
    <script>
        // Creamos la escena, la cámara y el renderizador
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        var renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        // Creamos un cubo
        var geometry = new THREE.BoxGeometry();
        var material = new THREE.MeshBasicMaterial({
            color: 0x00ff00
        });
        var cube = new THREE.Mesh(geometry, material);
        scene.add(cube);

        // Posicionamos la cámara
        camera.position.z = 5;

        // Animamos la escena
        function animate() {
            requestAnimationFrame(animate);
            cube.rotation.x += 0.01;
            cube.rotation.y += 0.01;
            renderer.render(scene, camera);
        }

        animate();
    </script>

</x-app-layout>
