import React, { FC, useState } from "react";
import { Helmet } from "react-helmet-async";
import Input from "shared/Input/Input";
import ButtonPrimary from "shared/Button/ButtonPrimary";
import { Link } from "react-router-dom";
import axios from 'axios';
import { useNavigate } from 'react-router-dom';

export interface PageLoginProps {
  className?: string;
}

const PageLogin: FC<PageLoginProps> = ({ className = "" }): React.ReactElement<any, any> | null => {
  const [formState, setFormState] = useState({ email: '', password: '' });
  const [isLoading, setIsLoading] = useState(false);
  const [errorMessage, setErrorMessage] = useState('');

  const handleInputChange = (event: { target: { name: any; value: any; }; }) => {
    setFormState({
      ...formState,
      [event.target.name]: event.target.value
    });
  };

  // Redirect to dashboard page
  const navigate = useNavigate();

  const handleSubmit = async (event: { preventDefault: () => void; }) => {
    event.preventDefault();
    setIsLoading(true);
    setErrorMessage('');
  
    try {
      // Replace with your API endpoint
      const response = await axios.post('http://127.0.0.1:8000/api/V1/login', formState);
      console.log(response.data);
      // Handle successful response here

      navigate('/dashboard');
    } catch (error: any) {
      const errorMessage = error.response?.data?.error?.message ?? error.message;
      setErrorMessage(errorMessage);
      console.error(error);
    } finally {
      setIsLoading(false);
    }
  };

  // ... rest of your component ...
  return (
    <div className={`nc-PageLogin ${className}`} data-nc-id="PageLogin">
      <Helmet>
        <title>Login || Ciseco React Template</title>
      </Helmet>
      <div className="container mb-24 lg:mb-32">
        <h2 className="my-20 flex items-center text-3xl leading-[115%] md:text-5xl md:leading-[115%] font-semibold text-neutral-900 dark:text-neutral-100 justify-center">
          Login
        </h2>

        

        <div className="max-w-md mx-auto space-y-6">


        {errorMessage && <p className="text-red-500">{errorMessage}</p>}
          
          {/* OR */}
          {/* <div className="relative text-center">
            <span className="relative z-10 inline-block px-4 font-medium text-sm bg-white dark:text-neutral-400 dark:bg-neutral-900">
              OR
            </span>
            <div className="absolute left-0 w-full top-1/2 transform -translate-y-1/2 border border-neutral-100 dark:border-neutral-800"></div>
          </div> */}
          {/* FORM */}
          <form className="grid grid-cols-1 gap-6" action="#" method="post" onSubmit={handleSubmit}>
            
          <label className="block">
            <span className="text-neutral-800 dark:text-neutral-200">
              Email address
            </span>
            <Input
              type="email"
              name="email"
              placeholder="example@example.com"
              className="mt-1"
              value={formState.email}
              onChange={handleInputChange}
            />
          </label>

          <label className="block">
            <span className="flex justify-between items-center text-neutral-800 dark:text-neutral-200">
              Password
            </span>
            <Input
              type="password" 
              name="password" 
              className="mt-1"
              placeholder="enter password"
              value={formState.password}
              onChange={handleInputChange}
            />
          </label>

            <ButtonPrimary type="submit">{isLoading ? 'Loading...' : 'Continue'}</ButtonPrimary>
          </form>

          {/* ==== */}
          <span className="block text-center text-neutral-700 dark:text-neutral-300">
            New user? {` `}
            <Link className="text-green-600" to="/signup">
              Create an account
            </Link>
          </span>
        </div>
      </div>
    </div>
  );
};

export default PageLogin;
