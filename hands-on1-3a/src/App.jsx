import logo from './logo.svg';
import './App.css';
import Name from'./component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {
  const UserInfo = {
    fname: "ROWELL ANDREI TORRES",
    section: "BSIT-3A",
    description: "STILL LEARNING"
  }
return (
<div classname="App">
<Name fullname={UserInfo.fname}/>
<Section section={UserInfo.section}/>
<Description description={UserInfo.description}/>
</div>
)} 

export default App;
