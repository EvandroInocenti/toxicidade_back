<h1> Cadastrar novo Post</h1    >
<form action=" {{ route('posts.store')}} " method="post">
    @csrf
    <input type ="text" nome = "title" placeholder="Título">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo"></textarea>
    <button type="submit">Enviar</button>
</form>