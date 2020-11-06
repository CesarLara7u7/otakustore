<script type="text/javascript">
    $(document).ready(function(){

    });
    function update_json(frm){
        var updatejs = document.createElement('input');
        var updjs = JSON.stringify(update);

        updatejs.type  = 'hidden';

        updatejs.name  = 'updatejs';

        updatejs.value = updjs;

        frm.appendChild(updatejs);
    }

    function update_eliminar(id){
        var idcon = 'p'+id;
        var cont = document.getElementById(idcon);
        var idsep = 'sep'+id;
        var sep = document.getElementById(idsep);
        update[id]['delete'] = true;
        cont.className = "d-none";
        sep.className = "d-none";
    }

    function update_actualizar(id,cantidad){
        var idsep = 'sep'+id;
        var sep = document.getElementById(idsep);
        update[id]['update'] = true;
        update[id]['cantidad'] = cantidad;
    }


</script>


<div class="container">
   <div class="container">
            <div class="card-header bg-white text-dark" >
                <i class="h3" aria-hidden="true"><strong>Tu carrito</strong></i>
                  
            </div>
            <div class="card-body">
                    <?php 
                        if (isset($listaProductos)) {
                            $iter = 0;
                            $precio = 1;
                            echo "<script> var update = []; </script>";
                            foreach ($listaProductos as $producto) {
                                echo "<div class='row' id ='p".$iter."' >";
                                echo "<div class='col-12 col-sm-12 col-md-2 text-center'>";
                                echo "<img class='img-responsive img-fluid' src='".base_url($producto['foto'])."' width='120' height='80'>";
                                echo "</div>";
                                echo "<div class='col-12 text-sm-center col-sm-12 text-md-left col-md-6'>";
                                echo "<h4 class='product-name'><strong>".$producto['articulo']."</strong></h4>";
                                echo "<h4>";
                                echo "<small>".$producto['descripcion']."</small>";
                                echo "</h4>
                                        </div>
                                        <div class='col-12 col-sm-12 text-sm-center col-md-4 text-md-right row'>
                                            <div class='col-3 col-sm-3 col-md-6 text-md-right' style='padding-top: 5px'>";
                                echo "<h6><strong><span class='text-muted'>$</span>".$producto['precio']."</strong></h6>";
                                echo "</div>
                                        <div class=''>
                                            <div class=''>
                                                <input type='number' step='1' max='99' min='1' value='".$producto['cantidad']."' class='qty'
                                                       size='4' class='container' onchange='update_actualizar(".$iter.",this.value)'>
                                            </div>
                                        </div>
                                        <div class='col-2 col-sm-2 col-md-2 text-right'>
                                            <button type='button' class='btn btn-outline-danger btn-xs' onclick = 'update_eliminar(".$iter.")'>X
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr id = 'sep".$iter."'>";
                                echo "<script> update.push({update: false, delete: false, id: '".$producto['idProducto']."', cantidad: '".$producto['cantidad']."' }) </script>";
                                $iter = $iter+1;
                                $precio = $precio+($producto['cantidad']*$producto['precio']);
                            }
                        }else{
                            echo "<h1>Aun no agregas nada a tu carrito</h1>";
                        }
                     ?>
                <div class="pull-right">
                    <a href="<?php echo base_url('index.php/Welcome/todo')?>" class="btn btn-outline-pink">
                        Continuar comprando
                    </a>
                    <form action='carrito_update' method='post' onSubmit='return update_json(this);'>
                    <input type='submit' class="btn btn-success" value='Guardar' >
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Cupón de descuento">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Usar Cupón">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Revisar Pedido</a>
                    <div class="pull-right" style="margin: 5px">
                        Total: <b>$<?php echo $precio; ?></b>
                    </div>
                </div>
            </div>
        </div>
</div>