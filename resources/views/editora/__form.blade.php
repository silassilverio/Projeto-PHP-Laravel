@include('layouts.validacao')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="nome" class="control-label">Nome:</label> 
            <input type="text" 
                   name="nome" 
                   id="nome"
                   value="{{ isset( $registro->nome ) ? $registro->nome : '' }}" 
                   class="form-control @error('nome') is-invalid @enderror "/>
            @error('nome')
            <div class="invalid-feedback">
                <span ><strong>{{ $message }}</strong></span>
            </div>
            @enderror
        </div>
    </div>
    

