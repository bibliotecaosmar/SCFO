@extends('layouts.main')

@section('content')
<div class="container mb-3" style="margin-top:100px!important;">
        <div class="row">
            @include('layouts.menu')
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 bg-light border border-dark rounded mt-2 py-2">
                <div class="container text-center mt-3 mb-3">
                    <h5>Relatório comparativo</h5>
                </div>
                <div class="dropdown-divider"></div>
                        <div class="container ">
                            <form class="mx-auto text-dark " style="width: auto;">
                                <div class="container text-center">
                                    <h5>Comparações de realizações e previsões</h5>
                                </div>
                                
                                <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                                  <table class="table table-bordered">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Código</th>
                                      <th scope="col">Tipo</th>
                                      <th scope="col">Titulo</th>
                                      <th scope="col">Data prevista</th>
                                      <th scope="col">Data realizada</th>
                                      <th scope="col">Valor previsto</th>
                                      <th scope="col">Valor realizado</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">001</th>
                                      <td>Receita</td>
                                      <td>Saldo inicial</td>
                                      <td>16/05/18</td>
                                      <td>20/05/18</td>
                                      <td>R$ 1500,00</td>
                                      <td>R$ 1200.00 </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">002</th>
                                      <td>Receita</td>
                                      <td>Salário</td>
                                      <td>08/06/18</td>
                                      <td>10/06/18</td>
                                      <td>R$ 1200,00</td>
                                      <td>R$ 1100,00</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">003</th>
                                      <td>Despesa</td>
                                      <td>Internet</td>
                                      <td>21/05/18</td>
                                      <td>21/05/18</td>
                                      <td>R$ 85,50</td>
                                      <td>R$ 85,50</td>
                                    </tr>
                                  </tbody>
                                </table>  
                                </div>
                                                              
                            </form>
                        </div>
                <button type="submit" class="btn btn-scfo ml-3 float-right mt-3 btn-md col-">Imprimir relatório</button>
            </div>
        </div>
    </div>
@stop