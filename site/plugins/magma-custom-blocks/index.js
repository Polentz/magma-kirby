panel.plugin("magma/button", {
  blocks: {
    title: {
      computed: {
        placeholder() {
          return "Titolo ...";
        }
      },
      template: `
      <div>
        <k-writer
          ref="input"
          :inline="true"
          :placeholder="placeholder"
          :value="content.title"
          :spellcheck="true"
          :marks="false"
          @input="update({ title: $event })"
        />
      </div>
      `
    },
    description: {
      computed: {
        placeholder() {
          return "Testo ...";
        }
      },
      template: `
      <div>
        <k-writer
          ref="input"
          :inline="true"
          :placeholder="placeholder"
          :value="content.description"
          :spellcheck="true"
          :marks="false"
          @input="update({ description: $event })"
        />
      </div>
      `
    },
    button: {
      computed: {
        placeholder() {
          return "Testo del pulsante ...";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.text"
          @input="update({ text: $event.target.value })"
        />
      `
    },
    download: {
      computed: {
        placeholder() {
          return "Testo del pulsante ...";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.text"
          @input="update({ text: $event.target.value })"
        />
      `
    }
  }
});