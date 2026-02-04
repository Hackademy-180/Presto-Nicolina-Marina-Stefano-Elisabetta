<form>
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model="title">
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model="description">
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Prezzo:</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" wire:model="price">
    @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <select name="category" id="category" wire:model="category" @error('category') is-invalid @enderror>
        <option label disabled>Seleziona una categoria</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Crea</button>
</form>
