@extends('main')

@section('content')
    <div class="container">
        @foreach($courses as $course)
            <div class="curso">
                <div class="curso-box">
                    <h3>Curso de {{ $course->name }}</h3>
                    <p>Descrição: {{ $course->description }}</p>
                    
                    <!-- Botão para abrir o modal -->
                   
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCurso{{ $course->id }}">
                        Detalhes
                    </button>
                      
                      
                </div> <!-- /.curso-box -->
            </div> <!-- /.curso -->
            
<!-- Modal específico do curso -->
<div class="modal fade" id="modalCurso{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="modalCursoLabel{{ $course->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCursoLabel{{ $course->id }}">Detalhes do Curso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Preço: R$ {{ $course->price }}</p>
                <p>Papel: {{ $course->role }}</p>
                <p>Validade: {{ $course->validate }}</p>
            </div>
            <div class="modal-footer justify-content-between">
                <a href="{{ route('inscription.index') }}" class="btn btn-primary">Inscrever-se</a>
                <button type="button" class="btn btn-custon-four btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
@endforeach



    </div> <!-- /.container -->
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
@endpush
