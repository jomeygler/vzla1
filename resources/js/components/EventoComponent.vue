<template>
<div margin-top: 50px; >
<table class="table"; margin-top: 50px;>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descricion</th>
      <th scope="col">Fecha</th>
      <th scope="col">monto</th>
      <th scope="col">Buscar</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">{{$Activo->id}}</th>
      <td>{{$Activo->descrip}}</td>
      <td>{{$Activo->fecha_ini}}</td>
      <td>{{$Activo->valor}}</td>
      <td><a href="/activo/{{$Activo->id}}" class="btn btn-prymary">Ir</a></td>
    </tr>
    
    
     </tbody>
     <a href="/activo/create" class="btn btn-prymary">crear</a>
</table>
</template>

<script>
export  default{
   mounted() {
            console.log('Component mounted.')
}

</script>