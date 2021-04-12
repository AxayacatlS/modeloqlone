<!DOCTYPE html>
<html>  
  <head>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>   

  <body>
    
    <!--<a-assets>
      <a-asset-item id="obj" src="plant.obj"></a-asset-item>
    </a-assets>-->
    <a-scene embedded arjs>
      <a-entity scale=".2 .2 .2"> 
        <a-entity gltf-model="fosilp.glb" scale="2 2 2" rotation="0 0 0" crossOrigin="anonymous"></a-entity>
        <!--<a-entity obj-model="obj: #obj;" scale="1 1 1" crossOrigin="anonymous"></a-entity>-->
        <a-marker-camera preset='hiro'></a-marker-camera>
      </a-entity>
     </a-scene>
  </body>
</html>
