panel.plugin("magma/button", {
  blocks: {
    title: {
      template: `
        <div
          class="ProseMirror"
          tabindex="0"
          :contenteditable="true"
          >
          <h2>{{ content.title }}</h2>
        </div>
      `
    },
    description: {
      template: `
        <div 
        class="ProseMirror"
        tabindex="0"
        :contenteditable="true"
        >
          <p>{{ content.description }}</p>
        </div>
      `
    },
    button: {
      computed: {
        placeholder() {
          return "Testo del Pulsante ...";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.buttontext"
          @input="update({ buttontext: $event.target.value })"
        />
      `
    }
  }
});