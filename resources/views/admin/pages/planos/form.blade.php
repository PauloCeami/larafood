@include('includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" value="{{ $plano->plan_nome ?? old('plan_nome') }}" name="plan_nome" class="form-control" placeholder="Nome:" >
</div>
<div class="form-group">
    <label>Preço:</label>
    @if(isset($plano) && !empty($plano))
    <input type="text" value="{{  number_format($plano->plan_preco,2,'.',',')   }}" name="plan_preco" class="form-control" placeholder="Preço:" >
    @else
    <input type="text" value="{{old('plan_preco')}}" name="plan_preco" class="form-control" placeholder="Preço:" >
    @endif
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input type="text" value="{{  $plano->plan_descricao ?? old('plan_descricao')  }}" name="plan_descricao" class="form-control" placeholder="Descrição:" >
</div>
<div class="form-group">
    
    <button type="submit"  
            
            class=' 
            @if(isset($plano) && !empty($plano))
            btn btn-warning
            @else
            btn btn-dark
            @endif'
            
            > 
        
        @if(isset($plano) && !empty($plano))
        Alterar
        @else
        Salvar
        @endif
        
    </button>
</div>


