// var registerBlockType = wp.blocks.registerBlockType;
// var __ = wp.i18n.__;
// var el = wp.element.createElement;
import './styles.editor.scss';

const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;
registerBlockType('customblock/secondblock', {

  title: __("Block 21", "customblock"),
  description: __("description 2", "customblock"),
  category: "media",
  icon: {
    background: '#f03',
    foreground: '#fff',
    src: 'admin-network'
  },
  keywords: [ __('gallery','customblock'), __('news','customblock') ],
  edit: ({className}) => {
    return <p className={ className }>API Content S</p>;
  },
  save: ()=> {
    return <p>Saved API Content</p>
  }

});
