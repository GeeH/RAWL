import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class Example extends Component {
    componentDidMount() {
        Echo.channel('RAWL')
            .listen('SomethingHappenedEvent', (e) => {
                console.log(e);
            });
    }

    render()
    {
        return (
            <section className="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header className="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Example Component
                </header>

                <div className="w-full p-6">
                    <p className="text-gray-700">
                        Example component content
                    </p>
                </div>

            </section>
        );
    }
}

export default Example;
if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
