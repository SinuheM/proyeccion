@extends('layout.mainBack')
@section('content')
    <section>
        <div class="center">
            <div class="titlePage">
                <h2>Lista de Pedidos</h2>
            </div>
            <div class="menuLista">
                <!-- <div class="lavado">
                    <a href="" class="lavadoPendiente">
                        <span>En espera</span>
                    </a>
                </div>
                <div class="lavado">
                    <a href="" class="lavadoPendiente">
                        <span>Pendientes</span>
                    </a>
                </div>
                <div class="lavado">
                    <a href="" class="lavadoCurso">
                        <span>En curso</span>
                    </a>
                </div>
                <div class="lavado">
                    <a href="" class="lavadoFinalizado">
                        <span>Finalizados</span>
                    </a>
                </div> -->
                <a href="reserva" class="reserva">+ Nuevo pedido</a>
            </div>
            @if(Session::has('notice'))
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            @endif
            <div class="pedidosLista">
                <table id="myTable">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Cliente</th>
                            <th>Telefono</th>
                            <th>Combo</th>
                            <th>Dificultad</th>
                            <th>Estado</th>
                            <th>Tiempo espera</th>
                            <th class="hide">Tiempo espera hide</th>
                            <th>Tiempo estimado</th>
                        </tr>
                    </thead>
                    <tbody id="myTableBody">
                    </tbody>
                </table>
                <!-- Lista de detalle de pedidos  -->
            </div>
        </div>
        <div class="center">
            <div class="titlePage">
                <h2>Detalles del pedido</h2>
            </div>
            <div class="menuLista as">
                {!!link_to('#',$title='Cancelar', $attributes = ['id'=>'CancelarS','class'=>'reserva lCancelarPedido'], $secure = null)!!}
                {!!link_to('#',$title='Atender', $attributes = ['id'=>'ActualizarS','class'=>'reserva lAtenderPedido'], $secure = null)!!}
            </div>
            <div class="pedidosDet">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <input type="hidden" id="idSelect" value="">
                <input type="hidden" id="idUser" value="{!!Auth::user()->id!!}">
                <input type="hidden" id="idEstado" value="">
                <div class="ClientDet">
                    <div class="client">
                        <h2>
                            <span id="clienteS">Naomi Cliente</span> - 
                            <span id="telefono">988772211</span>
                        </h2>
                    </div>
                    <div class="correo">
                        <span id="correo">Correo@carrocochino.com</span>
                    </div>
                </div>
                <div class="chart chartFirst">
                    <div class="chartTittle">
                        <h3>Detalles del Pedido</h3>
                    </div>
                    <div class="chartBody">
                        <div class="chartRow chartLbl">
                            <label class="lblName">Estado: </label>
                            <label class="lblEstado">Pendiente </label>
                        </div>
                        <div class="chartRow">
                            <label>Combo: </label>
                            <select name="Pack" id="Packes">
                                @foreach($packes as $pack)
                                    <option value="{{$pack->id}}">{{$pack->nombrePack}}</option>
                                @endforeach                            </select>
                        </div>
                        <div class="chartRow">
                            <label class="">Direccion: </label>
                            <input type="text" name="Direccion" value="" id="direccionPedido">
                            <div class="direcRow">
                                <select name="Distrito" id="distrito">
                                    <option value="Huancayo" selected="">Huancayo</option>
                                    <option value="Tambo">Tambo</option>
                                    <option value="Chilca">Chilca</option>
                                </select>
                            </div>
                            <div class="direcRow">
                                <select name="Provincia" disabled="" id="provincia">
                                    <option value="Huancayo" selected="">Huancayo</option>
                                </select>
                            </div>
                            <div class="direcRow">
                                <select name="Departamento" disabled="" id="departamento">
                                    <option value="Junin" selected="">Junin</option>
                                </select>
                            </div>
                        </div>
                        <div class="chartRow">
                            <label class="toplbl">Referencia: </label>
                            <textarea name="Referencia" id="Referencia" cols="30" rows="3"></textarea>
                        </div>
                        <div class="chartRow">
                            <label>Nota: </label>
                            <input type="text" name="NotaPedido" value="" id="notaPedido">
                        </div>
                        <div class="chartRow">
                            <label class="">Dificultad: </label>
                            <select name="dificultadP" id="dificultadP">
                                <option value="1" selected="">Simple</option>
                                <option value="2">Medio</option>
                                <option value="3">Complicado</option>
                            </select>
                        </div>
                        <div class="chartRow">
                            <label>Colaborador(es): </label>
                            <select name="" id="Colaborador" class="Colaborador">
                                @foreach($colaboradores as $colaborador)
                                    <option value="{{$colaborador->id}}">{{$colaborador->apellColaborador}}, {{$colaborador->nombreColaborador}}</option>
                                @endforeach
                            </select>
                            <select name="" id="Colaborador2" class="Colaborador">
                                @foreach($colaboradores as $colaborador)
                                    <option value="{{$colaborador->id}}">{{$colaborador->apellColaborador}}, {{$colaborador->nombreColaborador}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="chartRow">
                            <label class="">Tiempo estimado: </label>
                            <input type="number" name="estimado" value="" id="tiempoEst">
                        </div>
                        <div class="chartRow">
                            <label class="">Fecha de lavado: </label>
                            <input type="date" value="2010-10-20" id="fechaLavado">
                            <input type="time" value="03:35" id="horaLavado">
                        </div>
                        <div class="chartRow">
                            <label class="">Fecha de pedido: </label>
                            <input type="date" value="2010-10-20" id="fechaPedido">
                            <input type="time" value="03:35" id="horaPedido">
                        </div>
                        <div class="chartRow">
                            <label class="">Fecha de finalizado: </label>
                            <input type="date" value="2010-10-20" id="fechaFinalizado">
                            <input type="time" value="03:35" id="horaFinalizado">
                        </div>
                    </div>
                </div>
                <div class="chart">
                    <div class="chartTittle">
                        <h3>Detalles del Carro</h3>
                    </div>
                    <div class="chartBody">
                        <div class="chartRow">
                            <label>Marca: </label>
                            <input type="text" placeholder="Marca Carro" id="marcaCarro">
                        </div>
                        <div class="chartRow">
                            <label>Modelo: </label>
                            <input type="text" placeholder="Modelo Carro" id="modeloCarro">
                        </div>
                        <div class="chartRow">
                            <label>Placa: </label>
                            <input type="text" placeholder="Placa Carro" id="placaCarro">
                        </div>
                        <div class="chartRow">
                            <label class="">Color: </label>
                            <input type="text" placeholder="Color" id="colorCarro">
                        </div>
                        <div class="chartRow">
                            <label class="">Tipo: </label>
                            <select name="tipo" id="tipoCarro">
                                <option value="1">Auto</option>
                                <option value="2">Camioneta</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="chart chartLast">
                    <div class="chartTittle">
                         <h3>Calificación</h3>
                    </div>
                    <div class="chartBody">
                        <div class="chartRow">
                            <label class="">Calificación: </label>
                            <select name="calificacion" id="calificacionP">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Script etapa desarrollo -->
    <script type="text/javascript" src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="js/vendor/global.js"></script>

    <!-- Script etapa produccion 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    -->
    {!!Html::script('js/Backoffice.js')!!}
    {!!Html::script('js/vendor/MomentEs.js')!!}
    {!!Html::script('https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js')!!}
    
    <script type="text/javascript" src="js/vendor/dataTables.min.js"></script>
@stop