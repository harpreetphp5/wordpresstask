import './styles.editor.scss';

const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;
registerBlockType('customblock/firstblock', {

  title: __("Bottom Block", "customblock"),
  description: __("top header with text & button", "customblock"),
  category: "media",
  icon: {
    background: '#ff9900',
    foreground: '#fff',
    src: 'admin-network'
  },
  keywords: [ __('gallery','customblock'), __('news','customblock') ],
  edit: ({className}) => {
    return <div class="bottomDiv">
    <p><span class="bottomSpanner">NewsCorp</span>&nbsp;&nbsp;Australia</p>
    <p>@2020 Nationwide News Pty Limited. All rights reserved.</p>
</div>
  },
  save: ()=> {
    return <div class="bottomDiv">
    <p><span class="bottomSpanner">NewsCorp</span>&nbsp;&nbsp;Australia</p>
    <p>@2020 Nationwide News Pty Limited. All rights reserved.</p>
</div>
  }

});