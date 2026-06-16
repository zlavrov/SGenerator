import React from 'react';
import PropTypes from 'prop-types';
import Box from '@mui/material/Box';
import Typography from '@mui/material/Typography';
import { createTheme } from '@mui/material/styles';
import { AppProvider } from '@toolpad/core/AppProvider';
import { DashboardLayout } from '@toolpad/core/DashboardLayout';
import { DemoProvider, useDemoRouter } from '@toolpad/core/internal';

import HomeIcon from '@mui/icons-material/Home';
import PinIcon from '@mui/icons-material/Pin';
import AbcIcon from '@mui/icons-material/Abc';
import PersonIcon from '@mui/icons-material/Person';
import AlternateEmailIcon from '@mui/icons-material/AlternateEmail';
import LocalPhoneIcon from '@mui/icons-material/LocalPhone';
import BusinessIcon from '@mui/icons-material/Business';
import CalendarMonthIcon from '@mui/icons-material/CalendarMonth';
import LanIcon from '@mui/icons-material/Lan';
import TravelExploreIcon from '@mui/icons-material/TravelExplore';
import PaymentIcon from '@mui/icons-material/Payment';
import ColorLensIcon from '@mui/icons-material/ColorLens';
import BasePage from './view/BasePage';
import LoremPage from './view/LoremPage';
import PersonPage from './view/PersonPage';
import AdComponent from './view/AdComponent';
import FactoryIcon from '@mui/icons-material/Factory';
import Grid from '@mui/material/Grid';
import HomeComponent from './view/HomeComponent';
import AddressPage from './view/AddressPage';
import PhoneNumberPage from './view/PhoneNumberPage';
import DateTimePage from './view/DateTimePage';
import InternetPage from './view/InternetPage';

const demoTheme = createTheme({
    cssVariables: {colorSchemeSelector: 'data-toolpad-color-scheme'},
    colorSchemes: {light: true, dark: true},
    breakpoints: {values: {xs: 0, sm: 600, md: 600, lg: 1200, xl: 1536}},
});

function Content({ pathname }) {

    const getContent = (value) => {

        if (value.startsWith('/base')) {

            return <BasePage pathname={pathname} />;
        }

        if (value.startsWith('/lorem')) {

            return <LoremPage pathname={pathname} />;
        }

        if (value.startsWith('/person')) {

            return <PersonPage pathname={pathname} />;
        }

        if (value.startsWith('/address')) {

            return <AddressPage pathname={pathname} />;
        }

        if (value.startsWith('/phone-number')) {

            return <PhoneNumberPage pathname={pathname} />;
        }

        if (value.startsWith('/date-time')) {

            return <DateTimePage pathname={pathname} />;
        }

        if (value.startsWith('/internet')) {

            return <InternetPage pathname={pathname} />;
        }

        if (value.startsWith('/home')) {

            localStorage.setItem('location', value);
            return <HomeComponent pathname={pathname} />;
        }
    }

    return (
        <Box sx={{py: 4}}>
            <Grid container spacing={2}>
                <AdComponent />
                {getContent(pathname)}
                <AdComponent />
            </Grid>
        </Box>
    );
}

Content.propTypes = {pathname: PropTypes.string.isRequired};

function Main(props) {

    const { window } = props;

    let url = '/home';

    if (localStorage.getItem('location') !== null) {

        url = localStorage.getItem('location');
    }
    
    const router = useDemoRouter(url);

    const demoWindow = window !== undefined ? window() : undefined;

    const NAVIGATION = [
        {kind: 'header', title: 'Main items'},
        {segment: 'home', title: 'Home', icon: <HomeIcon />},
        {segment: 'base', title: 'Base', icon: <PinIcon />, children: [
            {segment: 'random-digits', title: 'Random Digits', icon: 1},
            {segment: 'number-between', title: 'Number Between', icon: 2},
            {segment: 'random-number', title: 'Random Number', icon: 3},
            {segment: 'random-float', title: 'Random Float', icon: 4}
        ]},
        {segment: 'lorem', title: 'Lorem', icon: <AbcIcon />, children: [
            {segment: 'words', title: 'Words', icon: 1},
            {segment: 'sentences', title: 'Sentences', icon: 2},
            {segment: 'paragraphs', title: 'Paragraphs', icon: 3},
            {segment: 'text', title: 'Text', icon: 4}
        ]},
        {segment: 'person', title: 'Person', icon: <PersonIcon />, children: [
            {segment: 'name', title: 'Name', icon: 1},
        ]},
        {segment: 'address', title: 'Address', icon: <AlternateEmailIcon />, children: [
            {segment: 'coordinates', title: 'Coordinates', icon: 1},
            {segment: 'address', title: 'Address', icon: 2},
        ]},
        {segment: 'phone-number', title: 'Phone Number', icon: <LocalPhoneIcon />, children: [
            {segment: 'phone-number', title: 'Phone Number', icon: 1},
        ]},
        {segment: 'compony', title: 'Company', icon: <BusinessIcon />, children: [

        ]},
        {segment: 'date-time', title: 'Date Time', icon: <CalendarMonthIcon />, children: [
            {segment: 'date-time', title: 'Date Time', icon: 1},
        ]},
        {segment: 'internet', title: 'Internet', icon: <LanIcon />, children: [
            {segment: 'email', title: 'Email', icon: 1},
            {segment: 'domain', title: 'Domain', icon: 2},
            {segment: 'password', title: 'Password', icon: 3},
            {segment: 'userName', title: 'UserName', icon: 4},
            {segment: 'url', title: 'Url', icon: 5},
            {segment: 'slug', title: 'Slug', icon: 6},
            {segment: 'ip', title: 'Ip', icon: 7},
            {segment: 'macAddress', title: 'MacAddress', icon: 8},
        ]},
        {segment: 'user-agent', title: 'User Agent', icon: <TravelExploreIcon />, children: [

        ]},
        {segment: 'payment', title: 'Payment', icon: <PaymentIcon />, children: [

        ]},
        {segment: 'color', title: 'Color', icon: <ColorLensIcon />, children: [

        ]},
    ];

    return (

        <DemoProvider window={demoWindow}>
            {/* preview-start */}
            <AppProvider 
                navigation={NAVIGATION} 
                router={router} 
                theme={demoTheme} 
                window={demoWindow}
                branding={{logo: <FactoryIcon color="primary" />, title: 'SGenerator', homeUrl: '/base'}}
            >
                <DashboardLayout>
                    <Content pathname={router.pathname} />
                </DashboardLayout>
            </AppProvider>
            {/* preview-end */}
        </DemoProvider>
    );
}

Main.propTypes = {window: PropTypes.func};

export default Main;
