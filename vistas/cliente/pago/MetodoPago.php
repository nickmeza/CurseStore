<?php
include_once "./vistas/cliente/component/header.php";
?>
<style>
  @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);

  h2 {
    margin-bottom: 0px;
    margin-top: 25px;
    text-align: center;
    font-weight: 200;
    font-size: 19px;
    font-size: 1.2rem;

  }

  .container__ventana {
    height: 100%;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-family: lato;

  }

  .dropdown-select.visible {
    display: block;
  }

  .dropdown {
    position: relative;
  }

  ul {
    margin: 0;
    padding: 0;
  }

  ul li {
    list-style: none;
    padding-left: 10px;
    cursor: pointer;
  }

  ul li:hover {
    background: rgba(255, 255, 255, 0.1);
  }

  .dropdown-select {
    position: absolute;
    background: #77aaee;
    text-align: left;
    box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    width: 90%;
    left: 2px;
    line-height: 2em;
    margin-top: 2px;
    box-sizing: border-box;
  }

  .thin {
    font-weight: 400;
  }

  .small {
    font-size: 12px;
  }

  .half-input-table {
    border-collapse: collapse;
    width: 100%;
  }

  .half-input-table td:first-of-type {
    border-right: 10px solid #4488dd;
    width: 50%;
  }

  .window {
    height: 540px;
    width: 80%;
    background: #fff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    box-shadow: 10px 10px 30px 0px rgba(0, 0, 0, 0.2);
    border-radius: 30px;
    z-index: 10;
    margin-bottom: 50px;
  }

  .order-info {
    overflow: auto;
    height: 100%;
    width: 50%;
    padding-left: 25px;
    padding-right: 25px;
    box-sizing: border-box;
    display: -ms-flexbox;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
  }

  .price {
    bottom: 0px;
    position: absolute;
    right: 0px;
    font-size: 15px;
    color: #4488dd;
  }

  .order-table td:first-of-type {
    width: 25%;
  }

  .order-table {
    position: relative;
  }

  .line {
    height: 1px;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 10px;
    background: #ddd;
  }

  .order-table td:last-of-type {
    vertical-align: top;
    padding-left: 25px;
  }

  .order-info-content {
    overflow-y: auto;

  }

  .full-width {
    width: 100%;
  }

  .pay-btn {
    border: none;
    background: #22b877;
    line-height: 2em;
    border-radius: 10px;
    font-size: 19px;
    font-size: 1.2rem;
    color: #fff;
    cursor: pointer;
    position: absolute;
    bottom: 25px;
    width: calc(100% - 50px);
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
  }

  .pay-btn:hover {
    background: #22a877;
    color: #eee;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
  }

  .total {
    font-size: 20px;
    font-size: 1.3rem;
    bottom: 30px;
    right: 27px;
    left: 35px;
  }

  .dense {
    line-height: 1.2em;
    font-size: 16px;
    font-size: 1rem;
  }

  .input-field {
    background: rgba(255, 255, 255, 0.1);
    margin-bottom: 10px;
    margin-top: 3px;
    line-height: 1.5em;
    font-size: 20px;
    font-size: 1.3rem;
    border: none;
    padding: 5px 10px 5px 10px;
    color: #fff;
    box-sizing: border-box;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
  }

  .credit-info {
    background: #4488dd;
    height: 100%;
    width: 50%;
    color: #eee;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 14px;
    font-size: .9rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    box-sizing: border-box;
    padding-left: 25px;
    padding-right: 25px;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
    position: relative;
  }

  .dropdown-btn {
    background: rgba(255, 255, 255, 0.1);
    width: 100%;
    border-radius: 5px;
    text-align: center;
    line-height: 1.5em;
    cursor: pointer;
    position: relative;
    -webkit-transition: background .2s ease;
    transition: background .2s ease;
  }

  .dropdown-btn:after {
    content: '\25BE';
    right: 8px;
    position: absolute;
  }

  .dropdown-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    -webkit-transition: background .2s ease;
    transition: background .2s ease;
  }

  .dropdown-select {
    display: none;
  }

  .credit-card-image {
    display: block;
    max-height: 80px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 35px;
    margin-bottom: 15px;
  }

  .credit-info-content {
    margin-top: 25px;
    -webkit-flex-flow: column;
    -ms-flex-flow: column;
    flex-flow: column;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
  }

  @media (max-width: 600px) {
    .window {
      width: 100%;
      height: 100%;
      display: block;
      border-radius: 0px;
    }

    .order-info {
      width: 100%;
      height: auto;
      padding-bottom: 100px;
      border-radius: 0px;
    }

    .credit-info {
      width: 100%;
      height: auto;
      padding-bottom: 100px;
      border-radius: 0px;
    }

    .pay-btn {
      border-radius: 0px;
    }
  }
</style>
<?php
$datos = array();


if (isset($metodo_pago)) {
  $datos = $metodo_pago;
  $i = 0;
}
?>
<div class='container__ventana' style="margin-top: 100px;">
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Orden de compra</h2>
        <div class='line'></div>
      </div>
    </div>
    <div class='credit-info'>
      <div class='credit-info-content'>
        <table class='half-input-table'>
          <tr>
            <td>Selecciona el método de pago: </td>
            <td>
              <select onchange="setImagen()" id="metodo_pago">
                <option value="-1">
                  seleccione una opción
                </option>
                <?php foreach ($datos as $dato) { ?>
                  <option value="<?php echo $GLOBALS['BASE_URL'] . $dato["MET_IMAGEN"] . "|" . $dato["MET_DATOS"] ?>"> <?php echo $dato["MET_NOMBRE"] ?>

                  </option>
                <?php } ?>
              </select>

              <div class='dropdown' id='card-dropdown'>
                <div class='dropdown-btn' id='current-card'>Visa</div>
                <div class='dropdown-select'>
                  <ul>
                    <li>Master Card</li>
                    <li>American Express</li>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <div>
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <h4>Total</h4>
            <div class='total'>

            </div>
          </div>
          <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
          <h4 id="dato_metodo">
          </h4>

        </div>
        <form id="form_solicitud">
          <label for="imagen">Card Holder</label>
          <input id="imagen" type="file" class='input-field inputimg'></input>

          <img id="img" src="<?php echo $GLOBALS['BASE_URL'] . "publico/img/imagen_default.png" ?>" width="100%" height="220px" style="object-fit: cover;" class="rounded mx-auto d-block">

          <button class='pay-btn' type="submit">Enviar</button>

        </form>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo $GLOBALS['BASE_URL'] ?>/direccion.js"></script>
<script>
  var idsProductos = [];
  var precioTotal = 0
  var filess;
  $(document).on("change", ".inputimg", function() {
    console.log("se ha cambiado");
    console.log(this.files['0']);
    filess = this.files['0'];
    console.log($(".inputimg").parent().children('img').attr("src"));
    console.log(this);
    if (this.files['0'] != undefined) {
      var file = this.files['0'];
      var tamano = this.files['0'].size;
      var tamanoconvertido = parseInt(tamano / 1024);
      if (tamanoconvertido > 1024) {
        alert("La imagen es muy grande. Pesa " + tamanoconvertido + " MB. El archivo debe sermenor a 1 MB");
        var input = $('#rutaimagen');
        input.replaceWith(this);
      } else {
        var image = URL.createObjectURL(file);
        $(".inputimg").parent().children('img').attr("src", image);
      }
    } else {
      $(".inputimg").parent().children('#img').attr("src", url + "publico/img/imagen_default.png");
    }
  });
  var cardDrop = document.getElementById('card-dropdown');
  var activeDropdown;
  cardDrop.addEventListener('click', function() {
    var node;
    for (var i = 0; i < this.childNodes.length - 1; i++)
      node = this.childNodes[i];
    if (node.className === 'dropdown-select') {
      node.classList.add('visible');
      activeDropdown = node;
    };
  })

  //
  function getCursos() {
    var idcurso = localStorage.getItem('idcurso') ? JSON.parse(localStorage.getItem('idcurso')) : [];
    var formdataIds = new FormData();
    formdataIds.append('ids', JSON.stringify(idcurso))
    $.ajax({
      type: 'POST',
      url: url + "admin/curso/getByIds",
      data: formdataIds,
      contentType: false,
      cache: false,
      processData: false,
      success: function(msg) {
        console.log(JSON.parse(msg))
        const resultado = JSON.parse(msg);
        resultado.map((valores, idx) => {
          CalcularPrecio(valores.CURS_PRECIO, valores.CURS_PRECIO, valores.CURS_ID)
          $(".order-info-content").append(`

        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='${valores.CURS_IMAGEN}' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>${valores.CURS_NOMBRE}</span>
                <br> ${valores.CURS_DESCRIPCION.slice(0, 20)} <br> <span class='thin small'> ${valores.CURS_DESCRIPCION.slice(19,-1)}<br><br></span>
              </td>

            </tr>
            <tr>
              <td>
                <div class='price'>S/. ${valores.CURS_PRECIO}</div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class='line'></div>
        `)
        })
        //location.href = url + "admin/categoria";
      }
    });
  }
  getCursos();
  /* <span style='font-size: 14px;'>
  S/.300
              </span> */

  function setImagen() {
    var datos = document.getElementById("metodo_pago").value
    console.log(datos.split("|"))
    var imagen = datos.split("|")[0]
    var dato = datos.split("|")[1]
    $("#dato_metodo").text(dato)
    $("#credit-card-image").attr("src", imagen)



  }

  function CalcularPrecio(precio, subprecio, idprducto) {
    precioTotal = Number(precio) + Number(precioTotal)
    $('.total').html(`<span style='font-size: 14px;'>
                      S/. ${precioTotal}
                    </span>`)
    const idproduct = {
      subprecio,
      idprducto
    }
    idsProductos.push(idproduct)
  }
  <?php
  $fecha_actual = date('d/m/Y');
  ?>
  $('#form_solicitud').submit((e) => {
    e.preventDefault();
    var formdata = new FormData()
    console.log(filess)
    formdata.append('ORD_VOUCHER', filess)
    formdata.append('CLI_ID', '<?PHP echo $idclient; ?>')
    formdata.append('ORD_DATE_ORDER', '<?PHP echo $fecha_actual; ?>')
    formdata.append('ORD_APPROVAL', '0')
    formdata.append('ORD_TOTAL_PRICE', precioTotal)
    formdata.append('ORD_DISCOUNT', 354)
    formdata.append('ORD_IGV', '0')
    $.ajax({
      type: 'POST',
      url: url + "admin/ventas/insertOrder",
      data: formdata,
      contentType: false,
      cache: false,
      processData: false,
      success: function(msg) {
        console.log()
        const orderCreated = JSON.parse(msg)
        idsProductos.map(
          (valor) => {
            console.log(valor)
            console.log(orderCreated.ORD_ID)
            var formdata2 = new FormData()
            formdata2.append('ORD_ID', orderCreated.ORD_ID)
            formdata2.append('CURS_ID', valor.idprducto)
            formdata2.append('ODT_STATUS', "1")
            formdata2.append('ODT_SUBTOTAL', valor.subprecio)
            /* $.ajax({
              type: 'POST',
              url: url + "admin/ventas/insertOrderDetalle",
              data: formdata2,
              contentType: false,
              cache: false,
              processData: false,
              success: function(msg) {
                console.log(msg)
              }
            }); */
            Swal.fire(
              'Enviado',
              'Correctamente',
              'success'
            )
            //location.href = url;
          }
        )
      }
    });

    /* idsProductos.map(
      (valor) => {
        $.ajax({
          type: 'POST',
          url: url + "admin/categoria/update",
          data: formdata,
          contentType: false,
          cache: false,
          processData: false,
          success: function(msg) {
            console.log(msg)
            location.href = url + "admin/categoria";
          }
        });
      }
    ) */
  })
  window.onclick = function(e) {
    if (e.target.tagName === 'LI' && activeDropdown) {
      if (e.target.innerHTML === 'Master Card') {
        document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/2vbqk5lcpi7hjoc/MasterCard_Logo.svg.png';
        activeDropdown.classList.remove('visible');
        activeDropdown = null;
        e.target.innerHTML = document.getElementById('current-card').innerHTML;
        document.getElementById('current-card').innerHTML = 'Master Card';
      } else if (e.target.innerHTML === 'American Express') {
        document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/f5hyn6u05ktql8d/amex-icon-6902.png';
        activeDropdown.classList.remove('visible');
        activeDropdown = null;
        e.target.innerHTML = document.getElementById('current-card').innerHTML;
        document.getElementById('current-card').innerHTML = 'American Express';
      } else if (e.target.innerHTML === 'Visa') {
        document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png';
        activeDropdown.classList.remove('visible');
        activeDropdown = null;
        e.target.innerHTML = document.getElementById('current-card').innerHTML;
        document.getElementById('current-card').innerHTML = 'Visa';
      }
    } else if (e.target.className !== 'dropdown-btn' && activeDropdown) {
      activeDropdown.classList.remove('visible');
      activeDropdown = null;
    }
  }
</script>
<?php

$fecha_actual = date('Y/m/d');

include_once "./vistas/cliente/component/footer.php";
?>