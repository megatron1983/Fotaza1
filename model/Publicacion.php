<?php
class Publicacion extends EntidadBase{
    private $licenciaId;
    private $fechaDePublicacion;
    private $titulo;
    private $imagen;
    private $formato;
    private $resolucion;
    private $ancho;
    private $alto;
    private $etiqueta1;
    private $etiqueta2;
    private $etiqueta3;
    private $estado;
    private $publica;
    
    public function __construct() {
        $table="publicacion";
        $primarykey="publicacionId";
        parent::__construct($table,$primarykey);
    }
    
    public function getId() {
        return $this->licenciaId;
    }

    public function setId($id) {
        $this->licenciaId = $id;
    }
    
    public function getUsuarioId() {
        return $this->usuarioId;
    }

    public function setUsuarioId($usuarioId) {
        $this->usuarioId = $usuarioId;
    }

    public function getCategoriaId() {
      return $this->categoriaId;
  }

  public function setCategoriaId($categoriaId) {
      $this->categoriaId = $categoriaId;
  }

  public function getLicenciaId() {
    return $this->licenciaId;
}

public function setLicenciaId($licenciaId) {
    $this->licenciaId = $licenciaId;
}

public function getFechaDePublicacion() {
  return $this->$fechaDePublicacion;
}

public function setFechaDePublicacion($fechaDePublicacion) {
  $this->fechaDePublicacion = $fechaDePublicacion;
}

public function getTitulo() {
  return $this->titulo;
}

public function setTitulo($titulo) {
  $this->titulo = $titulo;
}

public function getImagen() {
  return $this->imagen;
}

public function setImagen($imagen) {
  $this->imagen = $imagen;
}

public function getFormato() {
  return $this->formato;
}

public function setFormato($formato) {
  $this->formato = $formato;
}

public function getResolucion() {
  return $this->resolucion;
}

public function setResolucion($resolucion) {
  $this->resolucion = $resolucion;
}

public function getAncho() {
  return $this->ancho;
}

public function setAncho($ancho) {
  $this->ancho = $ancho;
}

public function getAlto() {
  return $this->alto;
}

public function setAlto($alto) {
  $this->alto = $alto;
}

public function getEtiqueta1() {
  return $this->etiqueta1;
}

public function setEtiqueta1($etiqueta1) {
  $this->etiqueta1 = $etiqueta1;
}

public function getEtiqueta2() {
  return $this->etiqueta2;
}

public function setEtiqueta2($etiqueta2) {
  $this->etiqueta2 = $etiqueta2;
}

public function getEtiqueta3() {
  return $this->etiqueta3;
}

public function setEtiqueta3($etiqueta3) {
  $this->etiqueta3 = $etiqueta3;
}

public function getEstado() {
  return $this->estado;
}

public function setEstado($estado) {
  $this->estado = $estado;
}
public function getPublica() {
  return $this->publica;
}

public function setPublica($publica) {
  $this->publica = $publica;
}

public function alta(){
  $query="INSERT INTO publicacion (publicacionId,usuarioId,categoriId,licenciaId,fechaDePublicacion,titulo,imagen,formato,resolucion,ancho,alto,etiqueta1,etiqueta2,etiqueta3,estado,publica)
          VALUES(NULL,
               '".$this->usuarioId."',
						   '".$this->categoriId."',
						   '".$this->licenciaId."',
						   '".$this->fechaDePublicacion."',
               '".$this->titulo."',
               '".$this->imagen."',
						   '".$this->formato."',
						   '".$this->resolucion."',
               '".$this->ancho."',
               '".$this->alto."',
						   '".$this->etiqueta1."',
						   '".$this->etiqueta2."',
               '".$this->etiqueta3."',
               '".$this->estado."',
               '".$this->publica."');";//que va aca Miguel?
  $save=$this->db()->query($query);
  //$this->db()->error;
  return $save;
}

public function modificar(){
  $query= "UPDATE publicacion set nombre = '$this->nombre'  where id = $this->id";//que va en $this->nombre
  
  $save=$this->db()->query($query);
  //$this->db()->error;
  return $save;

}

public function eliminar(){
  $query= "DELETE publicacion  where id = $this->id";
  
  $save=$this->db()->query($query);
  //$this->db()->error;
  return $save;

}


}
?>