<style>
  .teste {
    opacity: 0.9;
    margin-left: 100px; 
    border: 1px solid rgb(0 0 0/0.3);
    background: #ffff;
    border-radius: 50%;
    transition: box-shadow 0.2s cubic-bezier(0.2,0,0,1);
    cursor: pointer;
    padding: 6px;
    span {
      width: 12px;
      height: 12px;
    }
  }
  .teste:hover {
    opacity: 1;
    transform: scale(1.04);
    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
  }
</style>
<div>
  <button class="teste">
    <span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><path fill="none" d="m12 4 11.3 11.3a1 1 0 0 1 0 1.4L12 28"></path></svg>
    </span>
  </button>
</div>