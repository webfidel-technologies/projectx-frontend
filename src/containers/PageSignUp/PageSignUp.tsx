import React, { FC, useState } from "react";
import { Helmet } from "react-helmet-async";
import Input from "shared/Input/Input";
import ButtonPrimary from "shared/Button/ButtonPrimary";
import { Link } from "react-router-dom";
import axios from 'axios';
import { useNavigate } from 'react-router-dom';

export interface PageSignUpProps {
  className?: string;
}

const PageSignUp: FC<PageSignUpProps> = ({ className = "" }) => {
  const [formState, setFormState] = useState({ display_name: '', email: '', phone_number: '', dob: '', gender: '', password: '', password_confirmation: '' });
  const [isLoading, setIsLoading] = useState(false);
  const [errorMessage, setErrorMessage] = useState('');

  const handleInputChange = (event: { target: { name: any; value: any; }; }) => {
    setFormState({
      ...formState,
      [event.target.name]: event.target.value
    });
  };

  // Redirect to login page
  const navigate = useNavigate();



  const handleSubmit = async (event: { preventDefault: () => void; }) => {
    event.preventDefault();
    setIsLoading(true);
    setErrorMessage('');
  
    try {
      // Replace with your API endpoint
      const response = await axios.post('https://getbanny-backend.up.railway.app/api/V1/register', formState);
      console.log(response.data);
      // Handle successful response here

      navigate('/login');
    } catch (error: any) {
      const errorMessage = error.response?.data?.error?.message ?? error.message;
      setErrorMessage(errorMessage);
      console.error(error);
    } finally {
      setIsLoading(false);
    }
  };


  return (
    <div className={`nc-PageSignUp  ${className}`} data-nc-id="PageSignUp">
      <Helmet>
        <title>Sign up || Ciseco React Template</title>
      </Helmet>
      <div className="container mb-24 lg:mb-32">
        <h2 className="my-20 flex items-center text-3xl leading-[115%] md:text-5xl md:leading-[115%] font-semibold text-neutral-900 dark:text-neutral-100 justify-center">
          Signup
        </h2>

        

        <div className="max-w-md mx-auto space-y-6 ">

        {errorMessage && <p className="text-red-500">{errorMessage}</p>}


        <form className="grid grid-cols-1 gap-6" action="#" method="post" onSubmit={handleSubmit}>

          <label className="block">
            <span className="text-neutral-800 dark:text-neutral-200">
              Display name
            </span>
            <Input
              type="text"
              name="display_name"
              placeholder="Bethy Doe"
              className="mt-1"
              value={formState.display_name}
              onChange={handleInputChange}
            />
          </label>

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
            <span className="text-neutral-800 dark:text-neutral-200">
              Phone number
            </span>
            <Input
              type="tel"
              name="phone_number"
              placeholder="080123456789"
              className="mt-1"
              value={formState.phone_number}
              onChange={handleInputChange}
            />
          </label>

          <label className="block">
            <span className="text-neutral-800 dark:text-neutral-200">
              Date of birth
            </span>
            <Input
              type="text"
              name="dob"
              placeholder="How old are you?"
              className="mt-1"
              value={formState.dob}
              onChange={handleInputChange}
            />
          </label>

          <label className="block">
            <span className="text-neutral-800 dark:text-neutral-200">
              Gender
            </span>
            <Input
              type="text"
              name="gender"
              placeholder="whats your gender"
              className="mt-1"
              value={formState.gender}
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

          <label className="block">
            <span className="flex justify-between items-center text-neutral-800 dark:text-neutral-200">
              Password
            </span>
            <Input
              type="password" 
              name="password_confirmation" 
              className="mt-1"
              placeholder="confirm password"
              value={formState.password_confirmation}
              onChange={handleInputChange}
            />
          </label>

           <ButtonPrimary type="submit">{isLoading ? 'Loading...' : 'Continue'}</ButtonPrimary>
        </form>



          {/* ==== */}
          <span className="block text-center text-neutral-700 dark:text-neutral-300">
            Already have an account? {` `}
            <Link className="text-green-600" to="/login">
              Sign in
            </Link>
          </span>
        </div>
      </div>
    </div>
  );
};

export default PageSignUp;
