<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<div id="root"></div>

<script>
  const { useState } = React;

  function App(props) {
    const [id, setId] = useState(props.id);

    const handleClick = () => {
      console.log('Clicked!');
    };

    return (
      React.createElement('div', null,
        React.createElement('input', { type: 'text', value: id, onChange: (e) => setId(e.target.value) }),
        React.createElement('button', { type: 'button', onClick: handleClick }, 'Click')
      )
    );
  }

  ReactDOM.render(React.createElement(App, { id: 'test' }), document.getElementById('root'));
</script>


<script>
    // const e = React.createElement;

    // class App extends React.Component {
    //     what = () => {
    //         what(); // 執行 what 函數
    //     };
    //     render() {
    //         const inputElements = [];
    //         const id = this.props['id'];
    //         const inputElement = e('input', {type: 'text', value:id, key: id+'0'});
    //         inputElements.push(inputElement);
    //         inputElement = e('button', {type: 'button', key: id+'button', onClick:this.what});
    //         inputElements.push(inputElement);
    //         return inputElements;
    //     }
    // }

    
    // ReactDOM.render(e(App, {id:"test"}), $("div")[0]);
</script>
